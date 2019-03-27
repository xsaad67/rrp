<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Image;
use App\MemeTemplates;


class MemeController extends Controller
{
    public function index()
    {
    	$baseImage = 'memetemplates/temp_002C313B-54ED-F231-CEA4-AC4EE6F5098D_Ridiculously-Photogenic-Guy.jpg';
		$watermarkImage= 'images/logo.png';
		$image = addWatermarkToImage($baseImage,$watermarkImage);
		return $image->response();
    }   

    public function create($slug=null)
    {
        if($slug){
            $template = MemeTemplates::where("slug",$slug)->first();
            if(is_null($template)){
               return abort(404);
            }
        }else{
            $template = MemeTemplates::inRandomOrder()->take(1)->first();
        }
        $width = Image::make($template->templateImage)->width();
        $height = Image::make($template->templateImage)->height();
        $templates = MemeTemplates::popular()->take(30)->get();

    	return view('memes.create',compact('templates','template','width','height'));
    }

    public function store(Request $request)
    {
        
        $name = newGuid();
        $fileName = $name.".png";
        $baseImage = Image::make($request->image);
        $watermarkImage= 'images/logo.png';
        $watermark = Image::make(public_path($watermarkImage))->resize(40,40);
        $baseImage->insert($watermark, 'bottom-left');
        $baseImage->save(public_path('images/'.$fileName));
        $fileToDownload = asset("/images/".$fileName);
        $returnHtml = view("memes.generate")->render();
        

        $templateId=NULL;

        if(!is_null($request->ex)){
            $memeTemplate = MemeTemplates::find($request->ex);
            if(!is_null($memeTemplate)){
                $templateId = $memeTemplate->id;
            }
        }


        $id = auth()->id();
        $post = new Post();
        $post->title = $name;
        $post->isGuest = is_null($id) ? 1 : 0;
        $post->user_id = $id;
        $post->template_id = $templateId; 
        $post->isPublished = 0;
        $post->image = $fileName;
        $post->save();
            
    	return response()->json(['success'=>true,'file'=>$fileToDownload,'html'=>$returnHtml]);
    }

    public function downloadFile($fileName)
    {
        
    }

}

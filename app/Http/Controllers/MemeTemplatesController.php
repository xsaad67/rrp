<?php

namespace App\Http\Controllers;

use App\MemeTemplates;
use Illuminate\Http\Request;
use App\CrawlLinks;
use Image;

ini_set('max_execution_time', 480);

class MemeTemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $templates = MemeTemplates::popular()->paginate(30);
        $searchQuery = "";
        if($request->q){
            $templates = MemeTemplates::where("title","LIKE","%".$request->q."%")->paginate(30);
            $searchQuery= $request->q;
        }
        // return $templates;
        return view('templates.index',compact('templates','searchQuery'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(newGuid());
        $crawlLinks = CrawlLinks::where('isProceed',0)->get();
        
        foreach($crawlLinks as $crawl){
            
            if(validUrlImage($crawl->imgLink)){

                $fileName = "temp_".newGuid()."_".basename($crawl->imgLink);
                Image::make($crawl->imgLink)->save(public_path('memetemplates/' . $fileName));

                $template = new MemeTemplates();
                $template->title = $crawl->title;
                $template->fileName = $fileName;
                $template->save();

                $crawl->isProceed =1;
                $crawl->save();


            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MemeTemplates  $memeTemplates
     * @return \Illuminate\Http\Response
     */
    public function show(MemeTemplates $memeTemplates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MemeTemplates  $memeTemplates
     * @return \Illuminate\Http\Response
     */
    public function edit(MemeTemplates $memeTemplates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MemeTemplates  $memeTemplates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemeTemplates $memeTemplates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MemeTemplates  $memeTemplates
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemeTemplates $memeTemplates)
    {
        //
    }


    public function chooseTemplate(Request $request){
        $id = decrypt($request->id);
        $template = MemeTemplates::find($id);
        return response()->json(['success'=>'true','fileName'=>$template->fileName,'title'=>$template->title,'ex'=>$template->id]);
    }

    public function loadTemplates()
    {
        $templates = MemeTemplates::oldest()->get();
        $returnHtml = view('templates.ajaxLoader',compact('templates'))->render();
        return response()->json(['success'=>true,'html'=>$returnHtml]);
    }

}

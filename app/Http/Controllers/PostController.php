<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\MemeTemplates;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $memeTemplates = MemeTemplates::sortTemplatesWithMemes(10);
        $posts = Post::published()->paginate(5);
        // return $posts;
        return view("posts.index",compact("posts","memeTemplates"));
    }

    /**
    * Display adding list
    *  
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|bail|max:150',
            'image'=>'required|max:50000|image',
            'tags'=>'required',
        ]);

       $post = new Post();
       $fileName = newGuid();

        if ($request->hasFile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = $fileName.'.'.$extension;
            // $fileName = postImagePath($fileName); //If in future i need to change the discord.
            $path = public_path("/images/memes"); 
            $uplaod = $file->move($path,$fileName);

        }

       $post->title = $request->title;
       $post->hasTitle =1;
       $post->isPublished =0;
       $post->user_id = auth()->id();
       $post->image = $fileName;
       $isSave = $post->save();

        if($isSave){
            savingTags($request->tags,$post->id);
            // return redirect("posts/".$post->slug)->withSuccess("Your post has created successfully. It is now waiting for appproval");
        }

    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $post = Post::with("comments")->where("slug",$slug)->firstOrFail();

        // Post shown for the user 
        if($post->isPublished==0 && auth()->id() != $post->user_id && $post->isGuest==0){
            abort(404);
        }

        return view('posts.show',compact('post'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Post  $post
    * @return \Illuminate\Http\Response
    */
    public function edit(Post $post)
    {
// dd(app_path("Post.php"));
        dd(checkowsap());
        $keywords = $post->tags->implode('name',',');
        return view( 'posts.edit',compact("post","keywords") );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $tag =  \App\Tag::firstOrCreate([ 'name'=>strtolower("<a href='adf'>adjf</a>") ]);
        return $tag;
        $request->validate([
            'title'=>'required|bail|max:150',
            'image'=>'nullable|max:50000|image',
            'tags'=>'required',
        ]);

        $post->title = $request->title;
        $post->isPublished = is_null($request->published) ? 0 : 1;

        if ($request->hasFile('image')){
            $fileName = newGuid();
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = $fileName.'.'.$extension;
            $path = public_path("/images/memes"); 
            $uplaod = $file->move($path,$fileName);
            $post->image = $fileName;
        }       

        savingTags($request->tags,$post->id);
        $post->title = $request->title;

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        
    }
}

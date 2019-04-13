<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\MemeTemplates;
use Image;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
   
    public function index()
    {   

        return Post::with('supvoters','upvoters')->get();
        $ip = "127.0.0.1";
        
        $post = Post::find(3);
        $user = \App\User::find(2); 
        
        dd($post->guestUpvote($ip));
        return $ip;
    
        $isVote = $user->vote($post);
        return $isVote;


        // $memeTemplates = MemeTemplates::templateWithMemes(5)->get();
        // $posts = Post::with('vote')published()->paginate(10);
        // return view("posts.index",compact("posts","memeTemplates"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

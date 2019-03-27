<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;



class FavoriteController extends Controller
{

	public $user;

	public function __construct(){

		$this->middleware('auth');

		$this->middleware(function ($request, $next) {
            $this->user = auth()->user();
            return $next($request);
        });
		
	}

	/**
	 * 
	 * @param  Request $request [All the request parameters]
	 * @return [json]           [json containing upvote?* and total count of votes]
	 */
    public function upvote(Request $request)
    {	
		$post = Post::find($request->id);

		if($this->user->hasUpvoted($post)){
			$this->user->cancelVote($post);
			return response()->json(['success'=>'true','class' => 'upvote']);
		}

		$this->user->upvote($post);
		return response()->json(['success'=>'true','class'=>'upvoted']);
    
    }

	/**
	 * 
	 * @param  Request $request [All the request parameters]
	 * @return [json]           [json containing downvote?* and total count of votes]
	 */
    public function downvote(Request $request){

    	$post = Post::find($request->id);

		if($this->user->hasDownvoted($post)){
			$this->user->cancelVote($post);
			return response()->json(['success'=>'true','class' => 'downvote']);
		}

		$this->user->downvote($post);
		return response()->json(['success'=>'true','class'=>'downvoted']);
    }



	/**
	 * 
	 * @param  Request $request [All the request parameters]
	 * @return [json]           [json containing favorite?* and total count of favorite]
	 */
    public function favorite(Request $request){
    	$post = Post::find($request->id);
    	$favorited = $this->user->toggleFavorite($post);
    	if( isset($favorited['attached'][0]) && $favorited['attached'][0]==$request->id){
    		return "favorite";
    	}else{
    		return "unfavorite";
    	}
    }
}

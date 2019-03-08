<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    
    public function show($slug){
    	$user = User::where('slug',$slug)->firstOrFail();
    	$posts = $user->publishedPost()->paginate(5);
    	return view('users.show',compact('posts'));
    }

    public function edit(){

    	$user = auth()->id();
    	return $user;
    }

    public function update(Request $request){
    		
    }
}

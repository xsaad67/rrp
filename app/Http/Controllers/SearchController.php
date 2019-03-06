<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meme;

class SearchController extends Controller
{

    public function index(Request $request)
    {
    	if(empty($request->q)){
    		return abort(404);
    	}else{
    		return $request;
    	}
    }
}

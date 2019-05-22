<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index(){
        return abort(404);
    }

    public function edit(Request $request){
        return view("profiles.settings");
    }

    public function update(Request $request){
        
    }

    public function changePwd(Request $request){
        
    }

}

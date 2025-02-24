<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authentificationController extends Controller
{
    public function login(Request $request){
        dd($request['email']);
       
    }
    public function register(Request $request){
        
    }

}

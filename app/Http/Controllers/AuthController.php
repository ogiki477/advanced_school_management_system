<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){

        $data['meta_title'] = "Login";

        return view('auth.login',$data);

    }
}
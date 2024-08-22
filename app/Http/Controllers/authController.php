<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validate;
use Illuminate\Support\Facades\Hash;
use Session;

class authController extends Controller
{
    public function loginView(){
        return view('login');
    }

    public function doLogin(Request $req){
        $data = [
            "email" => $req->input('email'),
            "password" => $req->input('password')
        ];
    }

    public function logout(){
        dd(Auth->user());
    }
}

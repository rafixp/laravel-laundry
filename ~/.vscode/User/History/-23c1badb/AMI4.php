<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kasirController extends Controller
{
    public function homeView(){
        return view('home');
    }

    public function orderView(){
        return view('order');
    }
}

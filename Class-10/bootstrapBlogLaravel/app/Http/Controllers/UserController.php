<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){

        return view('mainPage/home');

    }

    public function about(){

        return view('mainPage/about');

    }

    public function post(){

        return view('mainPage/post');

    }

    public function contact(){

        return view('mainPage/contact');

    }


}

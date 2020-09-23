<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        return view('blog.home');
    }

    public function add(){
        return view('blog.add');
    }

    public function article(){
        return view('blog.article');
    }
}

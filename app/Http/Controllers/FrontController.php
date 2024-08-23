<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function about()
    {
        return view('about.about');
    }
    public function service()
    {
        return view('service.service');
    }
    
    public function blog()
    {
        return view('blog.blog');
    }

     public function index()
    {
        return view('frontend.app');
    }
    
}

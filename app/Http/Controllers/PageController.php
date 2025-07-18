<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {   return view('welcome'); }


 public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }


}





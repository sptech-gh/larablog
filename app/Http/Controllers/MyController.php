<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
    return view('test2'); // look for resources/views/test.blade.php
}

}

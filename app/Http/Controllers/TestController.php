<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
    return view('test'); // look for resources/views/test.blade.php
}
}


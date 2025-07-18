<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

class PageController extends Controller
{
 // app/Http/Controllers/PageController.php

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function showPost($id) {
        return view('posts.show', ['id' => $id]);
    }
}





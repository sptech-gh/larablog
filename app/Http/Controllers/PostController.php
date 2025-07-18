<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view("welcome");
    }
        public function show($id)
    {
        $post = Post::findOrFail($id); // 404 if not found

        return view('posts.show', compact('post'));
    }
}

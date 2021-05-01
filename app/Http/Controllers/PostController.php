<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('home',["posts"=>$posts]);
    }

    public function createApi(Request $request) {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->type = $request->type;
        $post->likes = $request->likes;
        $post->dislikes = $request->dislikes;
        $post->save();
        return response()->json(["post"=>$post],201);
    }
}

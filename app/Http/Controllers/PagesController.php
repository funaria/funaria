<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function home() {
        $posts = Post::published()->get();
        return View::make("home")->with('posts', $posts);
    }
}

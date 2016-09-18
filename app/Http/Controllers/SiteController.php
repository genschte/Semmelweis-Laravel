<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class SiteController extends Controller
{
    public function showPost($slug){
        $post = Post::whereSlug($slug)->first();
        return view('post', compact('post'));
    }
}

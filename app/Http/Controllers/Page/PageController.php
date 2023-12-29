<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    //home

    function home()
    {
        $recentNews = Post::orderBy('id', 'desc')->limit(2)->get();

        return view('index', compact('recentNews'));
    }

    function category($id)
    {
        $cateogry = Category::find($id);
        $posts = $cateogry->posts;

        return view('category', compact('posts'));
    }

    function  post($id)
    {
        $post = Post::find($id);
        $post->increment('views');
        return view('news', compact('post'));
    }
}

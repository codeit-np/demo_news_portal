<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use App\Http\Resources\NewsResource;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //get menus
    function getMenus()
    {
        $menus = Category::all();
        return MenuResource::collection($menus);
    }

    //Get latest news
    function getLatestNews()
    {
        $news = Post::latest()->limit(3)->get();;
        // return MenuResource::collection($menus);
        return NewsResource::collection($news);
    }

    //Get news by category id
    function getNews($id)
    {
        $menu = Category::find($id);
        $news = $menu->posts;
        return  NewsResource::collection($news);
    }

    function search(Request $search)
    {
        $news = Post::where('tags', 'like', '%' . $search->q . '%')->get();
        return NewsResource::collection($news);
    }

    function getNewsById($id)
    {
        $news = Post::find($id);
        return  new NewsResource($news);
    }
}

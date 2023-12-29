<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $menus = Category::all();
        $categories = Category::where('name', '!=', 'home')->get();
        $company = Company::first();
        $seo = Seo::first();
        View::share([
            'menus' => $menus,
            'company' => $company,
            'categories' => $categories,
            'seo' => $seo
        ]);
    }
}

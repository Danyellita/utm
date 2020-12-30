<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Sector;

class HomeController extends Controller
{
   
    public function __construct()
    {
        // $this->middleware('auth');
    }

    
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $sectors = Sector::all();

        return view('web.index', compact('products', 'categories', 'sectors'));
    }
}

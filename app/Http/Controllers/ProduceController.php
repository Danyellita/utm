<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Review;
use App\Pharmacy;
use App\Sector;
use App\PharmacyAddress;
use App\Street;


class ProduceController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $reviews = Review::create($request->all());
       
        return redirect()->view('web.index', compact('reviews'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        $similarproducts = Product::find($id)->similarproducts;
        $sales = Product::find($id)->sales; 
        $pictures = Product::find($id)->pictures;
        $categories = Category::all();
        $sectors = Sector::all();
        $reviews = Product::find($id)->reviews;
       
                
        return view('web.products.show', compact('product', 'similarproducts', 'sales', 'pictures', 'categories', 'reviews'));
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}

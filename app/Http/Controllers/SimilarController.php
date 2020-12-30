<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Similar;
use App\Product;
use App\Region;
use Illuminate\Support\Facades\Storage;

class SimilarController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        $products = Product::all();
        $regions = Region::all();
        return view('manage.similarproducts.create', compact('products','regions'));
    }

    
    public function store(Request $request)
    {

         if ($request->hasFile('image')) {
            
            $imageName = str_random(20);
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $newFullFileName = $imageName . '.' . $imageExtension;
            
            Storage::disk('public')->putFileAs('/similarproducts', $request->file('image'), $newFullFileName);    
        }
        $product = Similar::create([
            'name' => $request->name,
            'product_id'=>$request->product_id,
            'image'=> $newFullFileName,
            'region_id'=>$request->region_id,
        ]);

        return redirect()->route('manage.products.index');
       
    }

    
    public function show($id)
    {
        //
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

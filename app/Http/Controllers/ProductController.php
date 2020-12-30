<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Region;
Use App\Category;
use App\Review;
use App\Purchase;
use Auth;
use Illuminate\Support\Facades\Storage;
use File;
use App\Picture;
use App\Similar;
use App\Pharmacy;

class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->category) {
            $category = $request->category;
            $products = Product::where('category_id', $category)->paginate(5);
        }else{
            $products = Product::paginate(10);
        
        }

        return view('manage.products.index', compact('products'));
    }

    
    public function create()
    {
        $categories = Category::all();
        $regions = Region::all();
        $pharmacies = Pharmacy::all();
        return view('manage.products.create', compact('categories', 'regions', 'pharmacies'));
    }

    public function store(Request $request)
    {
        $newFullFileName = str_random(20) . '.' . $this->saveImage($request);
        
        Storage::disk('local')->putFileAs('/img', $request->file('picture'), $newFullFileName);
          
        $product= Product::create([
            'name'=> $request->name,
            'category_id'=> $request->category_id,
            'composition'=> $request->composition,
            'region_id' => $request->region_id,
            'packing_quantity'=> $request->packing_quantity,
            'weight'=> $request->weight,
            'product_measurement'=> $request->product_measurement,
            'picture'=> $newFullFileName,
            'pharmacy_id' =>$request->pharmacy_id,

        ]);

        $purchases = $request->get('purchases');
        $product->purchases()->createMany($purchases);
       
       return redirect()->route('manage.products.show', $product->id);
    }

    public function show($id)
    {
        $product = Product::find($id);

        $images = Picture::where('product_id', $id)->pluck('image');

        $similars = Similar::where('product_id', $id)->get();

        return view('manage.products.show', compact('product', 'images', 'similars'));
        //
    }

    
    public function edit($id)
    {
        $product = Product::find($id);
        $purchase = Purchase::all();

        return view('manage.products.edit', compact('product', 'purchase'));
    }

    
    private function saveImage(Request $request) 
    {
        $imageName = str_random(20);
        $imageExtension = $request->file('picture')->getClientOriginalExtension();
        $newFullFileName = $imageName . '.' . $imageExtension;
        Storage::disk('local')->putFileAs('/img', $request->file('picture'), $newFullFileName);

        return $imageExtension;
        
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $path = $request->file('picture');

        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->composition = $request->input('composition');
        $product->region_id = $request->input('region_id');
        $product->packing_quantity = $request->input('packing_quantity');
        $product->weight = $request->input('weight');
        $product->product_measurement = $request->input('product_measurement');
        
         
        if ($request -> hasFile('picture')) { 
            $imageName = str_random(20);
            $imageExtension = $request->file('picture')->getClientOriginalExtension();
            $newFullFileName = $imageName . '.' . $imageExtension;

            if(!empty($request->picture)){
                Storage::disk('local')->delete('img/' . $product->picture);
            } 
           
            Storage::disk('local')->putFileAs('/img', $request->file('picture'), $newFullFileName);
            $product->picture = $newFullFileName;
         }

        if($request->hasFile('image')) {
            $files = $request->file('image');
            foreach($files as $file)
            {
                $imageName = str_random(20);
                $imageExtension = $file->extension();
                $newFullFileName = $imageName . '.' . $imageExtension;
                Storage::disk('local')->putFileAs('/img', $file, $newFullFileName);

                $image = new Picture;
                $image->image = $newFullFileName;
                $image->product_id = $product->id;
                $image->save();

            }
                
        }

    
        $product->save();

        return redirect()->route('manage.products.show', $product->id);
    }

   
    public function destroy($id)
    {
        
    }
}

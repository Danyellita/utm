<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacy;
use App\Sale;
use App\Product;


class SaleController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {

        $pharmacies = Pharmacy::all();
        $products = Product::all();

        return view('manage.sales.create', compact('pharmacies', 'products'));
    }

    
    public function store(Request $request)
    {
        $sale = Sale::create([
            'initial_sales' => $request->initial_sales,
            'stock' => $request->stock,
            'product_id'=>$request->product_id,
            'sold_quantity'=> $request->sold_quantity,
            'pharmacy_id'=>$request->pharmacy_id,
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

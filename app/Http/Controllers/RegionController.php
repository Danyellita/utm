<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Product;

class RegionController extends Controller
{
    
    public function index(Request $request)
    {
        $regions = Region::all();


        return view('manage.regions.index', compact('regions'));
    }

    
    public function create()
    {
        return view('manage.regions.create');
    }

    
    public function store(Request $request)
    {
        $region=Region::create([
            'name'=>$request->name,
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        return view('manage.countries.create');
    }

    public function store(Request $request)
    {
         $country=Country::create([
            'name'=>$request->name,
        ]);

        return view('manage.countries.create');
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

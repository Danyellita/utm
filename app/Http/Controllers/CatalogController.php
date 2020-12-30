<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Sector;
class CatalogController extends Controller
{
  
    public function aboutus() {
        $categories = Category::all();
        return view('web.aboutus', compact('categories'));
        
    }

    public function contact() {
        return view('web.contact');
    }

    public function index()
    {
        $categories = Category::all();
        $sectors = Sector::all();
        
        return view('web.categories.index')->with(compact('categories', 'sectors'));
    }

    public function getsectors() {
        $sectors = Sector::all();
        $categories = Category::all();

        return view('web.sectors.index')->with(compact('sectors', 'sectors'));


    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();

        return view('manage.categories.index', compact('categories'));
    }

    
    public function create()
    {
        return view('manage.categories.create');
    }

    
    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('manage.categories.show', $category->id);
    }

    
    public function show($id)
    {
        $category = Category::find($id);

        return view('manage.categories.show', compact('category'));
    }

    
    public function edit($id)
    {
        $category = Category::find($id);
        return view('manage.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name'=>$request->name,
        ]);

         return redirect()->route('manage.categories.show', $category->id);
    }

    
    public function destroy($id)
    {
        //
    }
}

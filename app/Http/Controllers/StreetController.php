<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Street;
use App\Sector;

class StreetController extends Controller
{
    
    public function index()
    {
        $streets = Street::all();

        return view ('manage.streets.index', compact('streets'));
    }

    
    public function create()
    {
        $sectors = Sector::all();
        return view('manage.streets.create', compact('sectors'));
    }

    
    public function store(Request $request)
    {
        $street = Street::create([
            'name'=>$request->name,
            'sector_id'=>$request->sector_id,
        ]);

        return redirect()->route('manage.streets.show', $street->id);
    }

    
    public function show($id)
    {
        $street= Street::find($id);

        return view('manage.streets.show', compact('street'));
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

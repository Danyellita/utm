<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sector;

    use FarhanWazir\GoogleMaps\GMaps;
class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::all();
        $sumpopulation = Sector::all()->sum('population');

        return view('manage.sectors.index', compact('sectors', 'sumpopulation'));
    }

   
    public function create()
    {
        
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

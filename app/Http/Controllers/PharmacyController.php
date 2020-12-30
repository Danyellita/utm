<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacy;
use App\Street;
use App\PharmacyAddress;

class PharmacyController extends Controller
{
    
    public function index(Request $request)
    {
        $pharmacies = Pharmacy::paginate(10);

        return view('manage.pharmacies.index', compact('pharmacies'));
    }

    
    public function create()
    {
        $streets = Street::all();

        return view('manage.pharmacies.create', compact('streets'));
    }

    
    public function store(Request $request)
    {
        $pharmacy = Pharmacy::create([
            'name' => $request->name,
            'phone'=> $request->phone,
            'emial'=> $request->emial,
            'site' => $request->site,
            'working_time' => $request->working_time,
            'street_id' => $request->street_id,

        ]);

        return redirect()->route('manage.pharmacies.show', $pharmacy->id);
    }

    
    public function show($id)
    {
        $pharmacy = Pharmacy::find($id);

        return view ('manage.pharmacies.show', compact('pharmacy'));
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

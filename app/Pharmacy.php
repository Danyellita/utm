<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $guarded = [
    	'id'
    ];
    
    public function pharmacyaddress()
    {
    	return $this->belongsTo(PharmacyAddress::class);
    }

    public function street() 
    {
    	return $this->belongsTo(Street::class);

    }

    public function products()
    {
         return $this->hasMany(Product::class);
    }
}

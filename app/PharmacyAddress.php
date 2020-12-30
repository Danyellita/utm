<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PharmacyAddress extends Model
{
    protected $guarded= [
    	'id',
    ];

    public function street()
    {
    	return $this->belongsTo(Street::class);
    }
    
    public function pharmacies()
    {
    	return $this->hasMany(Pharmacy::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}

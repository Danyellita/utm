<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $guarded= [
    	'id',
    ];
    public function sector()
    {
    	return $this->belongsTo(Sector::class);
    }
    public function pharmacyaddresses()
    {
    	return $this->hasMany(PharmacyAddress::class);
    }
    public function pharmacies() 
    {
        return $this->hasMany(Pharmacy::class);
    }
    

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $guarded = [
    	'id'
    ]
    public function pharmacyaddress()
    {
    	return $this->belongsTo(PharmacyAddress::class);
    }
}

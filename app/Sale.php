<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guraded = [
    	'id',
    ]
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}

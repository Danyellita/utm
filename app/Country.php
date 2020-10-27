<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [
    	'id',
    ]
    public function purchases()
    {
    	return $this->hasMany(Purchase::class);
    }
    
}

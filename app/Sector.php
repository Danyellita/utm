<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $guarded = [
    	'id',
    ];
    public function streets()
    {
    	return $this->hasMany(Street::class);
    }
}

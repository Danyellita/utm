<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
    	'id'
    ]
    public function category()
    {
    	return $this->belognsTo(Category::class);
    }
    public function similarproducts()
    {
    	return $this->hasMany(SimilarProduct::class);
    }
    public function reviews()
    {
    	return $this->hasMany(Reviews::class);
    }
    public function price()
    {
        return $this->hasOne(Price::class);
    }
    public function sales()
    {
        retunr $this->hasMany(Sale::class);
    }
}

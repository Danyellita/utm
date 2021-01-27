<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
    	'id'
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }

    public function similarproducts()
    {
    	return $this->hasMany(Similar::class);
    }

    public function reviews()
    {
    	return $this->hasMany(Review::class);
    }
    
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
    
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

     public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
             $model->slug = str_slug($model->name, '-') . '-' . rand(1,10);
        });
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

}

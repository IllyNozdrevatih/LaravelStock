<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'active','uuid','slug','active','page_products_count'
    ];

    public function products(){
        return $this->hasMany('App\Product');
    }
}

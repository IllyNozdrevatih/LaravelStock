<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name','category_id'
    ];

    public function product(){
        return $this->hasMany('App\Product');
    }

    public function types(){
        return $this->hasMany('App\Type');
    }
}

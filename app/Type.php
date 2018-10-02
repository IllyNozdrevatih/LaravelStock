<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name','brand_id'
    ];

    public function product(){
        return $this->hasMany('App\Product');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }
}

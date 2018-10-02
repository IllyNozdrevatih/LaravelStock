<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
       'brand_id','type_id','uuid','slug','category_id','price','active'
    ];

    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function value_characteristics(){
        return $this->hasMany('App\ValueCharacteristic');
    }
}

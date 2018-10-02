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

    public function getCharacteristic(){
        $characteristics = array();
        $collection =  $this->value_characteristics;
        foreach ( $collection as $model ){
            array_push($characteristics,$model->value);
        }
        return implode(" ",$characteristics);
    }

    public function getName(){
        $name = $this->type->name.' '.$this->brand->name;
        return $name;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValueCharacteristic extends Model
{
    protected $fillable = [
        'characteristic_id','product_id','value'
    ];

    public function characteristic(){
        return $this->belongsTo('App/Characteristic');
    }

    public function product(){
        return $this->belongsTo('App/Product');
    }
}

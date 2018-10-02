<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    protected $fillable = [
        'name','slug','multiple'
    ];

    public function values(){
        return $this->hasMany('App\ValueCharacteristic');
    }
}

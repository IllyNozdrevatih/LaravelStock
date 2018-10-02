<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name','category_id'
    ];

    public function models(){
        return $this->hasMany('App\Model');
    }
}

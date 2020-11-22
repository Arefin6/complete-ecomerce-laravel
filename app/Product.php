<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','category_id','image','price'
    ];

    public function category(){

        return $this->belongsTo('App\Category');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table="products";

    public function smallCategories(){
    	return $this->belongsTo('app\smallCategories','id_small_category','id');
    }

     public function  images(){
        return $this->hasMany('app\images','id_product','id');
    }
}

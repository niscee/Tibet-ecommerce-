<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $guarded = ['id'];

    public function Product(){

        return $this->hasMany(Product::class,'category_id','id');
    }

    public function Pmenu(){

        return $this->hasMany(Pmenu::class,'category_id','id');
    }


}

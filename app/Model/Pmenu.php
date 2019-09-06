<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pmenu extends Model
{
    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Product(){

        return $this->hasMany(Product::class,'pmenu_id','id');
    }
}

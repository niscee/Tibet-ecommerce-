<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }


    public function Pimage(){
        return $this->hasMany(Pimage::class,'product_id','id');
    }

    public function Pmenu(){
        return $this->belongsTo(Pmenu::class);
    }


    public function Order(){
        return $this->hasMany(Order::class,'product_id','id');
    }

}

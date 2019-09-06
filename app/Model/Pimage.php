<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pimage extends Model
{
    protected $guarded = ['id'];

    public function Product(){

        return $this->belongsTo(Product::class);
    }


}

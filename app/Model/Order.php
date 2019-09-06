<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];


    public function Contact(){
        return $this->belongsTo(Contact::class,'contact_id','id');
    }


    public function Product(){
        return $this->belongsTo(Product::class);
    }

}

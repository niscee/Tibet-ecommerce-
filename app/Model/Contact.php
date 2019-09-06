<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = ['id'];


    public function Order(){
        return $this->hasMany(Order::class,'contact_id','id');
    }

}

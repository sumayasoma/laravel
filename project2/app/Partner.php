<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
     protected $table = 'partners';


    //protected $fillable=['name'];

    public function product(){

           return $this->hasMany('Product::class');
    }
}

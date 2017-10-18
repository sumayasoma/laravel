<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
  {
    

     protected $table = 'product';
     public $fillable=['name','cat_Id','partner_id','description','status','feature,','price','discount','image','timage'];

    public function category(){

           return $this->belongsTo('Categories::class');
    }


   
    public function partners(){

           return $this->belongsTo('Partner::class');
    }

    
   /*  public function images()
    {
       return $this->hasMany(ProductImage::class);
    }*/

    /*class Book extends Eloquent {

    public function author()
    {
        return $this->belongsTo('Author');
    }

}*/


}

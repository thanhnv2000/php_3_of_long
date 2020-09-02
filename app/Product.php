<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = "products";
   public $fillable = ['name','cate_id','price','short_desc','detail','star','views'];
   public function Category()
    {
        return $this->belongsTo('App\Category', 'cate_id');
    }
}
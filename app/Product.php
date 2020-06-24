<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','image','price','additional_info','category_id','subcategory_id'];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}

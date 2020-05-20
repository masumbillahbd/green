<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
     protected $fillable =['category_id','sub_category_name','sub_category_url'];

     public function category(){
     	return $this->belongsTO(Category::class, 'category_id');
     }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['category_name','category_url','category_position'];

    public function subCategories(){
    	return $this->hasMany(SubCategory::class);
    }

    public function posts(){
    	return $this->belongsToMany(Post::class);
    }
    
}

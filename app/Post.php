<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','sub_title','writer_name','post_content','image','post_status'];

    // public function categories(){
    // 	return $this->belongsTo('App\Category');
    // }

    public function tags(){

    	return $this->belongsToMany(Tag::class);
    }

    public function categories(){
        
        return $this->belongsToMany(Category::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}

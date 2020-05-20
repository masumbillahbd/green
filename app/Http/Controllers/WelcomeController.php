<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use App\Category;
use App\SubCategory;
use App\Post;

class WelcomeController extends Controller
{
    
    public function index(){
    	$logo = Logo::first();
    	$categories = Category::all();
    	$sub_categories = SubCategory::all();
    	$post = Post::take(1)->orderBy('id', 'desc')->where('post_status', 1)->get();
    	$posts = Post::take(5)->orderBy('id', 'desc')->where('post_status', 1)->get();
    	$posts4 = Post::take(4)->orderBy('id', 'desc')->where('post_status', 1)->get();
    	$posts7 = Post::take(7)->orderBy('id', 'desc')->where('post_status', 1)->get();
    	$latest = Post::take(10)->orderBy('id', 'desc')->where('post_status', 1)->get();
    	

    	return view('frontEnd.home.homeContent', compact('logo', 'categories','sub_categories', 'post', 'posts', 'posts4', 'posts7', 'latest'));
    }

    public function categoryPage(){
    	$logo = Logo::first();
    	return view('frontEnd.category.categoryContent', compact('logo'));
    }

    public function singlePage($id){
    	$data['logo'] = Logo::first();
    	$data['categories'] = Category::all();
    	$data['single_post'] = Post::find($id);
		$data['single_page_latest'] = Post::take(8)->orderBy('id', 'desc')->where('post_status', 1)->get();
		
    	return view('frontEnd.single.singlePage', $data);
    }
}

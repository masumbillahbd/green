<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;
use DB;


class CategoryController extends Controller
{
    
    public function createCategory(){
    	return view('backEnd.category.createCategory');
    }

    public function storeCategory(Request $request){

    	$this->validate($request, [
    		'category_name' => 'required',
    		'category_url' => 'required',
    		'category_position' => 'required'
    	]);

    	Category::create($request->all());
    	return redirect()->back()->with('message', 'Category info save successfully');

    }
    

    public function manageCategory(){
        $user = Auth::user();
    	$categories = Category::all();

    	return view('backEnd.category.manageCategory', compact('categories', 'user') );
    }


    public function editCategory ($id){

    	$categoryById = Category::where('id', $id)->first();
    	return view('backEnd.category.editCategory', ['categoryById'=>$categoryById]);

    }


    public function updateCategory(Request $request){
    	$catagory = Category::find($request->id);

    	$catagory->category_name = $request->category_name;
    	$catagory->category_url = $request->category_url;
    	$catagory->category_position = $request->category_position;
    	$catagory->save();

    	return redirect('/category/manage')->with('message', 'Category info Update successfully');
    }

    public function deleteCategory($id){
    	$category = Category::find($id);
    	$category->delete();

    	return redirect('/category/manage')->with('message', 'Category delete successfully');
    }
}

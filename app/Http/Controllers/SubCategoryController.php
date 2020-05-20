<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;



class SubCategoryController extends Controller
{
    public function createSubCategory(){
    	$categories = Category::orderBy('category_name', 'ASC')->get();

    	return view('backEnd.SubCategory.createSubCategory',['categories'=> $categories]);
    }

    public function storeSubCategory (Request $request){
    	SubCategory::create($request->all());
    	return redirect()->back()->with('message', 'SubCategory save successfully');
    }
// Category::create($request->all());
//     	return redirect()->back()->with('message', 'Category info save successfully');




	public function manageSubCategory (){
		$subCategories = SubCategory::with('category')->get();
		
		// return $subCategories;
		return view('backEnd.SubCategory.manageSubCategory', ['subCategories' => $subCategories ]);
	}

	public function editSubCategory($id){
		$SubCategoryEditById = SubCategory::where('id', $id)->first();
		$categories = Category::orderBy('category_name', 'ASC')->get();

		return view('backEnd.SubCategory.editSubCategory', ['SubCategoryEditById' => $SubCategoryEditById, 'categories' => $categories]);
	}

	public function updateSubCategory(Request $request){
		$subCat_id = SubCategory::find($request->id);

		$subCat_id->category_id = $request->category_id;
		$subCat_id->sub_category_name = $request->sub_category_name;
		$subCat_id->sub_category_url = $request->sub_category_url;
		$subCat_id->save();

		return redirect('/sub_category/manage')->with("message", "Sub Category Update successfully");
	}

	public function deleteSubCategory($id){
		$subCat_id = SubCategory::find($id);
		$subCat_id->delete();
		return redirect('/sub_category/manage')->with("message", "Sub Category Delete successfully");
	}
}




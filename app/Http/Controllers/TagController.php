<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function createTag(){
    	return view('backEnd.tag.createTag');
    }

    public function storeTag(Request $request){
    	$this->validate($request, [
    		'tag_name' => 'required'
    	]);

    	Tag::create( $request->all() );
    	return redirect()->back()->with('message', 'Tag save successfully');

    }

    public function manageTag(){
    	$tags = Tag::all();
    	return view('backEnd.tag.manageTag', ['tags'=>$tags] );
    }

    public function deleteTag($id){
    	$tag = Tag::find($id);
    	$tag->delete();
    	return redirect('/tag/manage')->with('message', 'Tag delete successfully');
    }
}

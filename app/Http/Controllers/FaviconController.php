<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favicon;
use Auth;


class FaviconController extends Controller
{
    public function createFavicon(){
    	return view('backEnd.favicon.createFavicon');
    }

    public function storeFavicon (Request $request){
    	$this->validate($request, [
    		'favicon' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024'
    	]);

    	$favicon = new Favicon();
    	$favicon->create_by = Auth::user()->id;

    	if($request->hasfile('favicon')){
    		$file = $request->file('favicon');
    		$extension = $file->getClientOriginalExtension();
    		$fileName = date('Y-m-d').'-'.time().'.'.$extension;
    		$file->move('Upload/logo', $fileName);
    		$favicon->favicon = $fileName;

    	}else{
    		return $request;
    		$favicon->favicon = '';
    	}

    	$favicon->save();

    	return redirect('/favicon/manage')->with('message', 'Favicon Save Successfully');



    }

    public function manageFavicon (){
    	$count_favicon  = Favicon::count();
    	// dd($count_favicon);
    	$favicon = Favicon::all();
    	return view('backEnd.favicon.manageFavicon', compact('favicon', 'count_favicon'));
    }

    public function editFavicon ($id){
    	$favicon = Favicon::where('id', $id)->first();
    	
    	return view('backEnd.favicon.editFavicon', compact('favicon'));

    }

    public function updateFavicon(Request $request) {
    	$this->validate($request, [
    		'favicon' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024'
    	]);

    	$favicon = Favicon::find($request->id);
    	
    	$favicon->update_by = Auth::user()->id;

    	if($favicon){
    		if($request->hasfile('favicon')){
    			unlink('Upload/logo/'.$favicon->favicon);
	    		$file = $request->file('favicon');
	    		$extension = $file->getClientOriginalExtension();
	    		$fileName = date('Y-m-d').'-'.time().'.'.$extension;
	    		$file->move('Upload/logo', $fileName);
	    		$favicon->favicon = $fileName;

	    	}
    	}
    	else{
    		return $request;
    		$favicon->favicon = '';
    	}

    	$favicon->save();
    	return redirect('/favicon/manage')->with('message', 'Favicon Update Successfully');

    }

    public function deleteFavicon($id){
    	$favicon = Favicon::find($id);

    	unlink('Upload/logo/'.$favicon->favicon);
    	
    	$favicon->delete();
    	return redirect('/favicon/manage')->with('message', 'Favicon Delete Successfully');
    }

}

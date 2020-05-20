<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use Auth;


class LogoController extends Controller
{
    public function createLogo(){
    	return view('backEnd.logo.createLogo');
    }

    public function storeLogo(Request $request){
    	$this->validate($request, [
    		'logo' => 'required'
    	]);

    	$logo = new Logo();
    	$logo->create_by = Auth::user()->id;

    	if($request->hasfile('logo')){
    		$file = $request->file('logo');
    		$extension = $file->getClientOriginalExtension();
    		$fileName = date('Y-m-d').'-'.time().'.'.$extension;
    		$file->move('Upload/Logo', $fileName);
    		$logo->logo = $fileName;

    	}else{
    		return $request;
    		$logo->logo = '';
    	}

    	$logo->save();

    	return redirect('/logo/manage')->with('message', 'Logo save successfully');
    }


    public function manageLogo(){
    	$count_logo = Logo::count();
    	// dd($count_logo);
    	$logos = Logo::all();
    	return view('backEnd.logo.manageLogo', ['count_logo' => $count_logo, 'logos' => $logos] );
    }


    public function editLogo($id){
    	$logo = Logo::where('id', $id)->first();

    	return view('backEnd.logo.editLogo', ['logo' => $logo]);
    }

    public function updateLogo(Request $request){
    	$logo = Logo::find($request->id);
        // echo "<pre>";
        // print_r($logo->id);
        // exit();

        $logo->update_by = Auth::user()->id;

        if($logo){
            
            if($request->hasfile('logo')){
                unlink('Upload/logo/'.$logo->logo);
                $file = $request->file('logo');
                $extension = $file->getClientOriginalExtension();
                $fileName = date('Y-m-d').'-'.time().'.'.$extension;
                $file->move('Upload/logo', $fileName);
                $logo->logo = $fileName;
            }

        }else{
            return $logo->logo;
        }

        $logo->save();
        return redirect('/logo/manage')->with('message', 'Logo Update successfully');
    }

    public function deleteLogo($id){
    	$logo = Logo::find($id);
    	unlink('Upload/logo/'.$logo->logo);

    	$logo->delete();
    	return redirect('/logo/manage')->with('message', 'Logo Delete successfully');
    	
    }
}

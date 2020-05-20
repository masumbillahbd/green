<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralSetting;


class GeneralSettingController extends Controller
{
    
    public function createSetting(){
    	return view('backEnd.setting.createSetting');
    }

	public function storeSetting(Request $request){
		GeneralSetting::create( $request->all() );
    	return redirect('/setting/manage')->with('message', 'Data Save successfully');
	}

	public function manageSetting(){
		$count_data = GeneralSetting::count();

		$all_data = GeneralSetting::all();
		return view('backEnd.setting.manageSetting', compact('all_data', 'count_data'));
	}

	public function editSetting($id){
		$data = GeneralSetting::find($id);

		return view('backEnd.setting.editSetting', compact('data'));
	}

	public function updateSetting(Request $request){
		$data =GeneralSetting::find($request->id);
		
		$data->site_url = $request->site_url;
		$data->title = $request->title;
		$data->meta_description = $request->meta_description;
		$data->meta_keywords = $request->meta_keywords;
		$data->meta_author = $request->meta_author;
		$data->address = $request->address;
		$data->copy_right = $request->copy_right;

		$data->save();
		return redirect('/setting/manage')->with('message', 'Data Update Successfully');
	}

	public function deleteSetting($id){
		$data = GeneralSetting::find($id);

		$data->delete();

		return redirect('/setting/manage')->with('message', 'Data Delete successfully');
	}
    
}

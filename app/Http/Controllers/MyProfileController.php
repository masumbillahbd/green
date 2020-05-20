<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class MyProfileController extends Controller
{
    public function manageProfile (){
    	$user = Auth::user();
    	return view('backEnd.profile.manageProfile', compact('user'));
    }
}

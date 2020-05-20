<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function createUser(){
    	return view('backEnd.user.createUser');
    }

    public function storeUser(Request $request){

    	$this->validate($request, [
    		'name' => 'required|min:3|max:10|unique:users,name',
    		'role' => 'required',
    		'email' => 'required|unique:users,email',
            'number' => 'required|min:11|max:14',
    		'password' => 'required|min:5|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/|max:10',
            'confirm_password' => 'required|same:password',
    	]);

        $user = new User();

        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->password = bcrypt( $request->password );
        $user->save();

    	// User::create( $request->all() );

    	return redirect()->back()->with('message', 'User save successfully');

    }


    public function manageUser(){
    	$users = User::all();
        // dd($users->toArray());
    	return view('backEnd.user.manageUser', compact('users'));
    }

    public function editUser($id){
        $userById = User::where('id', $id)->first();

        return view('backEnd.user.editUser', compact('userById'));
    }

    public function updateUser(Request $request){
        $user = User::find($request->id);

        $this->validate($request, [
            'name' => 'required|min:3|max:10|unique:users,name',
            'role' => 'required',
            'email' => 'required|unique:users,email',
            'number' => 'required|min:11|max:14',
            'password' => 'required|min:5|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/|max:10',
            'confirm_password' => 'required|same:password',
        ]);

        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->password = bcrypt( $request->password);

        $user->save();

        return redirect('/user/manage')->with('message', 'User Update Successfully');
    }


    public function deleteUser($id){
    	$user = User::find($id);
    	$user->delete();

    	return redirect('/user/manage')->with('message', 'User Delete Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Permission;

use Auth;

class UserController extends Controller
{
    public function index()
    {
    	if(Auth::user()->permission_id != '4'){
    		return back()->with('error','Permission denied');
    	}

    	$user = User::query()
        		->select('users.name','users.account','permissions.job_name')
        		->leftjoin('permissions','permissions.id','=','users.permission_id')
        		->get();

       	$permission = Permission::all();

    	return view('user.index',compact('user'));
    }

    public function create()
    {
    	if(Auth::user()->permission_id != '4'){
    		return back()->with('error','Permission denied');
    	}

    	$permission = Permission::all();

    	return view('user.create',compact('permission'));
    }

    public function store(User $user, Request $request)
    {
    	$user = new User;
    	$user->name = $request->name;
    	$user->account = $request->account;
    	$user->password = bcrypt($request->password);
    	$user->permission_id = $request->permission;
    	$user->save();

    	return redirect()->route('user.index')->with('success','Add success');
    }
}

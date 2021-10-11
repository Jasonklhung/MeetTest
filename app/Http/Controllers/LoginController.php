<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Auth;

use Validator;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function login(User $user , Request $request)
    {

    	$account = $request->account;
    	$password = $request->password;

    	if (Auth::attempt(array('account' => $account, 'password' => $password))){

    		return redirect()->route('ticket.index');
    	}
    	else{
    		return redirect()->route('login.index')->with('error','Account Or Password Error');
    	}
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect()->route('login.index');
    }
}

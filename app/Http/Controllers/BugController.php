<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bug;

use Auth;

class BugController extends Controller
{
    public function index(Bug $bug)
    {
    	//get all bug list
    	$bug = Bug::all();

    	return view('bug.index',compact('bug'));
    }

    public function create()
    {
        if(Auth::user()->bugPermission->create == 'N'){
            return redirect()->route('bug.index')->with('error','Permission denied');
        }

    	return view('bug.create');
    }

    public function store(Bug $bug , Request $request)
    {
    	$bug = new Bug;
	    $bug->summary = $request->summary;
	    $bug->description = $request->description;
	    $bug->save();

	    return redirect()->route('bug.index')->with('success','Add success');
    }

    public function edit(Bug $bug , $id)
    {
        if(Auth::user()->bugPermission->edit == 'N'){
            return redirect()->route('bug.index')->with('error','Permission denied');
        }

    	$bug = Bug::find($id);

        if(!isset($bug)){
            return redirect()->route('bug.index')->with('error','Not found');
        }

        if($bug->is_deleted == 'Y'){
            return redirect()->route('bug.index')->with('error','The bug is deleted');
        }

    	return view('bug.edit',compact('bug'));
    }

    public function update(Bug $bug , Request $request , $id)
    {
    	$bug = Bug::find($id);
	    $bug->summary = $request->summary;
	    $bug->description = $request->description;
	    $bug->save();

	    return redirect()->route('bug.index')->with('success','Edit success');
    }

    public function destroy(Bug $bug , Request $request , $id)
    {

    	$bug = Bug::find($id);
	    $bug->is_deleted = 'Y';
	    $bug->save();

	    return redirect()->route('bug.index')->with('error','Delete success');
    }

    public function slove(Bug $bug , Request $request , $id)
    {

    	$bug = Bug::find($id);
	    $bug->status = 'Y';
	    $bug->save();

	    return redirect()->route('bug.index')->with('success','Slove success');
    }
}

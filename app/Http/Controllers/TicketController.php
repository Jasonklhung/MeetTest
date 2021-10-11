<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;

use Auth;

class TicketController extends Controller
{
    public function index()
    {
    	$ticket = Ticket::all();

    	return view('ticket.index',compact('ticket'));
    }

    public function create()
    {
    	if(Auth::user()->ticketPermission->type_featureRequest_create == 'N' && Auth::user()->ticketPermission->type_testCase_create == 'N'){
    		return redirect()->route('ticket.index')->with('error','Permission denied');
    	}
    	else{
    		return view('ticket.create');
    	}
    }

    public function store(Ticket $ticket,Request $request)
    {

    	$bug = new Ticket;
	    $bug->severity = $request->severity;
	    $bug->priority = $request->priority;
	    $bug->type = $request->type;
	    $bug->save();

	    return redirect()->route('ticket.index')->with('success','Add success');
    }

    public function slove(Ticket $ticket, Request $request, $id)
    {
    	$ticket = Ticket::find($id);
    	$type = $ticket->type;

    	if($type == 'featureRequest' && Auth::user()->ticketPermission->type_featureRequest_slove == 'Y'){
    		$ticket->status = 'Y';
	    	$ticket->save();
    	}
    	elseif($type == 'testCase' && Auth::user()->ticketPermission->type_testCase_slove == 'Y'){
    		$ticket->status = 'Y';
	    	$ticket->save();
    	}
    	else{
    		return redirect()->route('ticket.index')->with('error','Permission denied');
    	}

    	return redirect()->route('ticket.index')->with('success','Slove success');
    }
}

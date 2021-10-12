<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function ticketList()
    {
    	$ticket = Ticket::all();

    	return $ticket;
    }
}

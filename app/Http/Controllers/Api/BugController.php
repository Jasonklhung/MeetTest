<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bug;

class BugController extends Controller
{
    public function bugList()
    {
    	$bug = Bug::all();

    	return $bug;
    }

    public function store(Request $request)
    {
    	$summary = $request->summary;
    	$description = $request->description;

    	if(!isset($summary)){
    		return json_encode(array("status" => 400 , "message" => "缺少參數:summary"));
    	}
    	elseif(!isset($description)){
    		return json_encode(array("status" => 400 , "message" => "缺少參數:description"));
    	}

    	$bug = new Bug;
	    $bug->summary = $summary;
	    $bug->description = $description;
	    $bug->save();

	    return json_encode(array("status" => 200 , "message" => "新增成功"));

    }
}

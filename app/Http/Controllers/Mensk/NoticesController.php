<?php

namespace App\Http\Controllers\Mensk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Quest;

class NoticesController extends Controller
{
    /**
     * Show the mensk text view.
     *
     * @return \Illuminate\Http\Response
     */
    public function main() 
    {
	    $quests = Quest::where('is_active', '=', 1)->get();
		return view('mensk.notices')->with('quests', $quests);
    }
    
    public function quest($quest_id) 
    {
    	$quest = Quest::find($quest_id);
    	return view('quest')->with('quest', $quest);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Http\Requests;
use Auth;

class MenskController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the mensk text view.
     *
     * @return \Illuminate\Http\Response
     */
    public function main() 
    {  
	    $testing = Player::find( Auth::user()->id );
		return view('mensk')->with('testing', $testing);
    }
}

<?php

namespace App\Http\Controllers\Mensk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Character;
use App\User;
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
		return view('mensk');
    }
}
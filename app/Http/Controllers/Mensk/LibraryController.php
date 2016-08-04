<?php

namespace App\Http\Controllers\mensk;

use App\Clan;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LibraryController extends Controller
{
    /**
     * Show the mensk text view.
     *
     * @return \Illuminate\Http\Response
     */
    public function main() 
    {     
        return view('mensk.library.library');
    }
    
    public function info() 
    {     
        return view('mensk.library.info');
    }
    
    public function records() 
    {     
        return view('mensk.library.records');
    }
    
    public function clans()
    {
        $clans = Clan::all();
        
        if ( !count($clans) )
            flash('It seems that there are no clans yet created.', 'warning');
        
        return view('mensk.library.clans')->with('clans', $clans);
    }
    
    public function research() 
    {     
        return view('mensk.library.research');
    }
    
    public function writings() 
    {     
        return view('mensk.library.writings');
    }
}

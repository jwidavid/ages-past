<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;


class InventoryController extends Controller
{
	
	protected $character;
	
	
	public function __construct() 
	{
		$this->character = Auth::user()->character; 
	}
	
    public function main() 
    {
	    
	    //$weapons 	= $this->character->weapons();
	    /*
	    foreach ($weapons as $weapon) {
		    if ( $weapon->isEquipped() )
		    	$weapon_equipped = $weapon;
	    }
	    
	    $armors 	= $this->character->armors;
	    $items		= $this->character->items;
	    */
	    
    	return view('inventory');
    }
}

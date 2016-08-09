<?php

namespace App\Http\Controllers\Mensk;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class MeditationController extends Controller
{
    public function main() 
    {
    	return view('mensk.meditation');
    }
    
    public function meditate(Request $request) 
    {
    	
    	$character = Auth::user()->character;
    	
    	$max = floor($character->stamina / 10);
    	
    	$validator = Validator::make($request->all(), [
	    	 'stamina_max' => "integer|min:1|max:{$max}"
    	],
    	[
	    	'stamina_max.integer' => "Only full sessions are allowed.",
	    	'stamina_max.min' => "You must agree to at least one session if I am to help you...",
 		    'stamina_max.max' => "You do not have enough stamina to complete that many sessions."
    	]);

	    if ($validator->fails())
	    {
	        flash($validator->errors()->first(), 'danger');
	        return redirect('mensk/meditation')->withInput();
	    }
	    
	    $character->stamina -= $request->stamina_max * 10;
	    $character->stamina_max += $request->stamina_max;
    	
    	$character->save();
    	
    	flash("You gained +{$request->stamina_max} maximum stamina!", 'success');
    	return redirect('mensk/meditation');
    }
}

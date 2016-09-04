<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class CharacterController extends Controller
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
     * Show the character creation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function createView()
    {
        $race[0] = [
            'id' => 1,
            'name' => 'Fighter',
            'description' => 'Slight bonus to damage in combat.',
            'male_image' => 'lineage/fighter-male.png',
            'female_image' => 'lineage/fighter-female.png',
            'strength' => 5,
            'endurance' => 5,
            'agility' => 5,
            'perception' => 5];
        $race[1] = [
            'id' => 2,
            'name' => 'Ranger',
            'description' => 'Moves through the wilderness more efficiently.',
            'male_image' => 'lineage/ranger-male.png',
            'female_image' => 'lineage/ranger-female.png',
            'strength' => 5,
            'endurance' => 5,
            'agility' => 5,
            'perception' => 5];
        
        $races = json_decode (json_encode ($race), FALSE); 
	
		return view('character.create')->with('races', $races);
    }
    
    protected function create(Request $request)
    {
	    dd( $request );
    }
}

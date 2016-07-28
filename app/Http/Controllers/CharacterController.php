<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
    public function create()
    {
        
        $race[0] = [
            'id' => 1,
            'name' => 'Human',
            'description' => 'This race combines in itself all the properties of the other races, albeit they are less pronounced.',
            'male_image' => 'races/human-male.png',
            'female_image' => 'races/human-female.png',
            'strength' => 5,
            'agility' => 5,
            'constitution' => 5,
            'intelligence' => 5,
            'charisma' => 1];
        $race[1] = [
            'id' => 2,
            'name' => 'Elf',
            'description' => 'This race is known for it\'s great agility, but lacks constitution.',
            'male_image' => 'races/elf-male.png',
            'female_image' => 'races/elf-female.png',
            'strength' => 5,
            'agility' => 9,
            'constitution' => 1,
            'intelligence' => 5,
            'charisma' => 1];
        
        $races = json_decode (json_encode ($race), FALSE);
        
        return view('character.create')->with('races', $races);
    }
}

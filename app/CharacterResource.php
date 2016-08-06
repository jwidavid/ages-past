<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class CharacterResource extends Model
{
	
	protected $fillable = ['coins', 'bronze', 'silver', 'gold', 'platinum'];	
	public $timestamps = false;
	protected $rules = array(
		    'coins' 	=> 'integer|min:0',
            'bronze' 	=> 'integer|min:0',
			'silver' 	=> 'integer|min:0',
			'gold' 		=> 'integer|min:0',
			'platinum' 	=> 'integer|min:0',
	    );
	
	
    /**
     * Get the user of the character
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
    
    
    public function decrease($request) {
	    
	    Validator::make($request->input(), $this->rules);
	    
	    $this->coins 	-= $request->coins;
	    $this->bronze 	-= $request->bronze;
	    $this->silver 	-= $request->silver;
	    $this->gold 	-= $request->gold;
	    $this->platinum -= $request->platinum;
	    
	    return $this->save();
    }
    
    
    public function increase($request) {
	    
	    Validator::make($request->input(), $this->rules);
	    
	    $this->coins 	+= $request->coins;
	    $this->bronze 	+= $request->bronze;
	    $this->silver 	+= $request->silver;
	    $this->gold 	+= $request->gold;
	    $this->platinum += $request->platinum;
	    
	    return $this->save();
    } 
}
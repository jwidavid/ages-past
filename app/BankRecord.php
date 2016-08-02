<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class BankRecord extends Model
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
    
    
    public function deposit($request) {
	    
	    // validator is not working
	    $validator = Validator::make($request->input(), $this->rules);
	    if ($validator->fails()) {
            return redirect('mensk/bank')
            	->withErrors($validator)
                ->withInput();
        }
	    
	    $this->coins 	+= $request->coins;
	    $this->bronze 	+= $request->bronze;
	    $this->silver 	+= $request->silver;
	    $this->gold 	+= $request->gold;
	    $this->platinum += $request->platinum;
	    
	    return $this->save();
    }        
    

    public function depositMax($type) {
	    $typemax = $type.'_max';
	    return $this->$typemax - $this->$type;
    }
    

    public function withdraw($request) {
	    
	    $validator = Validator::make($request->input(), $this->rules);
	    if ($validator->fails()) {
            return redirect('mensk/bank')
            	->withErrors($validator)
                ->withInput();
        }
	    
	    
	    $this->coins 	-= $request->coins;
	    $this->bronze 	-= $request->bronze;
	    $this->silver 	-= $request->silver;
	    $this->gold 	-= $request->gold;
	    $this->platinum -= $request->platinum;
	    
	    return $this->save();
    }
}
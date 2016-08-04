<?php

namespace App\Http\Controllers\Mensk;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\BankRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use Laracasts\Flash\FlashNotifier;


class BankController extends Controller
{
    private $character;
    private $resources;
    private $bankRecord;
    public $cost;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->character 	= Auth::user()->character;
	    $this->resources 	= $this->character->resources;
	    $this->bankRecord 	= $this->character->bankRecord;
	    
	    $this->cost = round( $this->bankRecord->coins_max / 1410 ) + 10;
    }
    
    /**
     * Show the mensk text view.
     *
     * @return \Illuminate\Http\Response
     */
    public function main() 
    {     
		return view('mensk.bank')->with('cost', $this->cost);
    }
    
    
    public function deposit(Request $request) 
    {	   

	    $this->validate($request, [
		    'coins' 	=> "integer|max:{$this->resources->coins}|max:{$this->bankRecord->depositMax('coins')}",
            'bronze' 	=> "integer|max:{$this->resources->bronze}|max:{$this->bankRecord->depositMax('bronze')}",
			'silver' 	=> "integer|max:{$this->resources->silver}|max:{$this->bankRecord->depositMax('silver')}",
			'gold' 		=> "integer|max:{$this->resources->gold}|max:{$this->bankRecord->depositMax('gold')}",
			'platinum' 	=> "integer|max:{$this->resources->platinum}|max:{$this->bankRecord->depositMax('platinum')}",
	    ],
	    [
		    'coins.max' => "You cannot deposit that many coins.",
		    'bronze.max' => "You cannot deposit that much bronze.",
		    'silver.max' => "You cannot deposit that much silver.",
		    'gold.max' => "You cannot deposit that much gold.",
		    'platinum.max' => "You cannot deposit that much platinum.",
	    ]);	
		
	    
	    $this->resources->decrease($request);
	    $this->bankRecord->deposit($request);

	    flash('Thank-you for your deposit!', 'success');  
	    
	    return redirect('mensk/bank');
    }
    
    
    public function withdraw(Request $request) 
    {
	    $coinMax = $this->bankRecord->coins;
	    
		$this->validate($request, [
		    'coins' 	=> "integer|min:0|max:{$coinMax}",
            'bronze' 	=> "integer|min:0|max:{$this->bankRecord->bronze}",
			'silver' 	=> "integer|min:0|max:{$this->bankRecord->silver}",
			'gold' 		=> "integer|min:0|max:{$this->bankRecord->gold}",
			'platinum' 	=> "integer|min:0|max:{$this->bankRecord->platinum}",
	    ],
	    [
		    'coins.max' => "Not enough coins in your account.",
		    'bronze.max' => "Not enough bronze in your account.",
		    'silver.max' => "Not enough silver in your account.",
		    'gold.max' => "Not enough gold in your account.",
		    'platinum.max' => "Not enough platinum in your account.",
	    ]);	    		    	    
	    
	    $this->bankRecord->withdraw($request);
	    $this->resources->increase($request);

		flash('Thank-you for your business!', 'success');		
	    
	    return redirect('mensk/bank');
    }
    
    
	public function increaseCoinMax() 
	{
		
		if ( $this->resources->platinum < $this->cost ) {
			
			flash("You need at least {$this->cost} platinum.", 'danger');
			
			return redirect('mensk/bank');
		}

		$this->resources->platinum -= $this->cost;
		$this->resources->save();
		
		$this->bankRecord->coins_max += 25000;
		$this->bankRecord->save();
		
		flash('The maximum coins your account can hold has increased!', 'success');
		
		return redirect('mensk/bank');
	}
}
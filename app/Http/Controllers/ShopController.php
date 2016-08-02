<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Http\Requests;
use Auth;

class ShopController extends Controller
{
	private $character;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->character = Auth::user()->character;
    }
	
    public function main($shop_id) 
    {
	    $shop = Shop::find($shop_id);	    
	    $products = $shop->get_products_details();
	    
		return view('merchant')->with('products', $products);
    }
    
    public function purchase($shop_id, $product_id) 
    {
    	$product_base = Shop::find($shop_id)->products()->find($product_id);
    	
    	if ( $product_base->weapon_template_id )
    		$product = $product_base->weapon_template;
    	elseif ( $product_base->armor_template_id )
    		$product = $product_base->armor_template;
    	else
			$product = $product_base->item_template;		

    	flash('Product Name: '.$product->name, 'success');
    	return redirect('mensk/merchant');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\ShopProduct;
use App\Armor;
use App\Item;
use App\Weapon;
use App\Http\Requests;
use Auth;

class ShopController extends Controller
{
	protected $character;
    
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->character = Auth::user()->character;       
    }
    
    protected function createArmor( $product_base, $product )
    {
        Armor::create([
            'armor_template_id' => $product_base->armor_template_id,
            'character_id'  => $this->character->id,
            'defense'       => $product->defense,
            'fireres'       => $product->fireres,
            'waterres'      => $product->waterres,
            'earthres'      => $product->earthres,
            'lightningres'  => $product->lightningres,
            'windres'       => $product->windres,
        ]);
        
        return true;
    }
	
    protected function createItem( $product_base, $product )
    {
        Item::create([
            'item_template_id' => $product_base->item_template_id,
            'character_id' => $this->character->id,
            'uses' => $product->uses
        ]);
        
        return true;
    }
    
    protected function createWeapon( $product_base, $product )
    {
        Weapon::create([
            'weapon_template_id' => $product_base->weapon_template_id,
            'character_id'      => $this->character->id,
            'damage_min'        => $product->damage_min,
            'damage_max'        => $product->damage_max,
            'firedmg'           => $product->firedmg,
            'waterdmg'          => $product->waterdmg,
            'earthdmg'          => $product->earthdmg,
            'lightningdmg'      => $product->lightningdmg,
            'winddmg'           => $product->winddmg,
        ]);
        
        return true;
    }
    
    protected function getProductTemplate( $product_base )
    {
        if ( $product_base->weapon_template_id )
            return $product_base->weapon_template;
        elseif ( $product_base->armor_template_id )
            return $product_base->armor_template;
        else
            return $product_base->item_template;
    }
    
    public function main($shop_id) 
    {    
	    
	    // If shop is not found - handle error
	    // If shop has no products - handle error
	    
	    $shop = Shop::find($shop_id);
	    $oldproducts = 
	    	ShopProduct::where("shop_id", "=", $shop_id)
				->with(['armorTemplate', 'itemTemplate', 'weaponTemplate'])
				->get();
		
		foreach ( $oldproducts as $product ) {
			
			if ($product->armorTemplate) {
            	$newproduct = $product->armorTemplate;
				$newproduct['product_type'] = 'armor';
            }
            elseif ($product->itemTemplate) {
            	$newproduct = $product->itemTemplate;
				$newproduct['product_type'] = 'item';
            }
            elseif ($product->weaponTemplate) {
            	$newproduct = $product->weaponTemplate;
            	$newproduct['product_type'] = 'weapon';
            }
			
			$newproduct['product_id'] = $product->id;
			$newproduct['cost'] = $product->cost;
			$newproduct['currency'] = $product->currency;
			
			$newproducts[] = $newproduct;
		}
		
		$products = (object) $newproducts;
	    
		return view('shop.'.$shop->layout)
			->with('shop', $shop)
			->with('products', $products);
    }
    
    public function purchase($shop_id, $product_id) 
    {
        $product_base = Shop::find($shop_id)->products()->find($product_id);
                    	
        if ( !$product_base ) {
            flash('That item is not sold here.', 'danger');
            return redirect()->back();
        }
        
        $product = $this->getProductTemplate( $product_base );
            
            
        $resources = $this->character->resources;
        $currency = $product_base->currency;
        
        if ( $resources->$currency < $product_base->cost ) {
            flash("You're too broke to buy the {$product->name}!", 'danger');
            return redirect()->back();
        }
        
        if ( $product_base->weapon_template_id )
            $this->createWeapon($product_base, $product);
        elseif ( $product_base->armor_template_id )
            $this->createArmor($product_base, $product);
        else
            $this->createItem($product_base, $product);
        
        // take character's money
        $resources->$currency -= $product_base->cost;
        $resources->save();
        
    	flash('Thank-you for purchasing the '.$product->name, 'success');
    	return redirect()->back();
    }
}

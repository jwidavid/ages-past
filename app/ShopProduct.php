<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{    
    public function armor_template() 
    {
    	return $this->belongsTo(ArmorTemplate::Class);
    }
    
    public function item_template() 
    {
    	return $this->belongsTo(ItemTemplate::Class);
    }
    
    public function shop() 
    {
    	return $this->belongsTo(Shop::Class);
    }
    
    public function weapon_template() 
    {
    	return $this->belongsTo(WeaponTemplate::Class);
    }
}

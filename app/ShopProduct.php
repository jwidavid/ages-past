<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{    
    public function armorTemplate() 
    {
    	return $this->belongsTo(ArmorTemplate::Class);
    }
    
    public function itemTemplate() 
    {
    	return $this->belongsTo(ItemTemplate::Class);
    }
    
    public function shop() 
    {
    	return $this->belongsTo(Shop::Class);
    }
    
    public function weaponTemplate() 
    {
    	return $this->belongsTo(WeaponTemplate::Class);
    }
}

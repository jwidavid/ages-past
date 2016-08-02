<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	
	public function products() {
		return $this->hasMany(ShopProduct::Class);
	}
	
	public function get_products_details() {
		return DB::table('shop_products')
			->leftjoin('weapon_templates', 'shop_products.weapon_template_id', '=', 'weapon_templates.id')
			->leftjoin('armor_templates', 'shop_products.armor_template_id', '=', 'armor_templates.id')
			->leftjoin('item_templates', 'shop_products.item_template_id', '=', 'item_templates.id')			
			->get();
	}
}

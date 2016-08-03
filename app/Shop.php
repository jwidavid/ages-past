<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	
	public function products() {
		return $this->hasMany(ShopProduct::Class);
	}
}

<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    
    protected $fillable = ['item_template_id','character_id','uses'];
	public $timestamps = false;
	
	/**
     * Get the Character owner of the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
    
    /**
     * Get the Template of the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function template()
    {
        return $this->belongsTo(ItemTemplate::class);
    }
    
    
//	public static function get_items_and_data() 
//	{		
//		return DB::table('items')
//			->join('item_templates', 'items.item_template_id', '=', 'item_templates.id')			
//			->get();
//	}
}

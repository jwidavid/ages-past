<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    protected $fillable = [
    	'armor_template_id','character_id','defense',
		'fireres','waterres','earthres',
		'lightningres','windres', 'created_at'
	];
	public $timestamps = false;
	
    
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
        return $this->belongsTo(ArmorTemplate::class);
    }
}

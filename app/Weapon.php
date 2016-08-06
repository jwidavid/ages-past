<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $fillable = [
    	'weapon_template_id','character_id','damage_min',
		'damage_max','firedmg','waterdmg','earthdmg',
		'lightningdmg','winddmg', 'created_at'
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
        return $this->belongsTo(WeaponTemplate::class);
    }
    
    public function isEquipped() 
    {
    	if ( $this->is_equipped )
    		return true;
    	else
    		return false;
    }
}

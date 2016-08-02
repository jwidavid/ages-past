<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    //protected $fillable = ['item_template_id','character_id','uses'];
    
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

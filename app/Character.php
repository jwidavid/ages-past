<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    
    protected $guarded = ['user_id'];
    public $timestamps = false;
    
    /**
     * Get the user of the character
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
     
    /**
     * Get the character's financial resources
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function resources() 
    {
        return $this->hasOne(CharacterResource::class);
    }
    
    /**
     * Get the character's banked financial resources
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bankRecord() 
    {
        return $this->hasOne(BankRecord::class);
    }
    
    /**
     * Get the character's items
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items() 
    {
        return $this->hasMany(Item::class);
    }
    
    /**
     * Get the character's weapons
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function weapons() 
    {
    	return $this->hasMany(Weapon::class);
    }
    
    /**
     * Get the character's armors
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function armors() 
    {
    	return $this->hasMany(Armor::class);
    }
}

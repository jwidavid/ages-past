<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    
    protected $guarded = ['user_id'];
    public $funds;
    
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resources() 
    {
        return $this->hasOne(CharactersResource::class);
    }

}

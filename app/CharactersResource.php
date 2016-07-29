<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharactersResource extends Model
{
    /**
     * Get the user of the character
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemTemplate extends Model
{
    
    /**
     * Get the Template of the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function items()
    {
        return $this->hasMany(Item::Class);
    }
}

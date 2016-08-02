<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArmorTemplate extends Model
{
    /**
     * Get the Template of the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function armors()
    {
        return $this->hasMany(Armor::Class);
    }
}

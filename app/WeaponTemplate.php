<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeaponTemplate extends Model
{
    /**
     * Get the Template of the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function weapons()
    {
        return $this->hasMany(Weapon::Class);
    }
}

<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Get the character for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character()
    {
        return $this->hasOne(Character::class);
    }
    
    public function hasCharacter()
    {
        return (count($this->character));
    }
}

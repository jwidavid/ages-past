<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $fillable = [
    	'character_id','name','message','create_at'
	];
	public $timestamps = false;
}

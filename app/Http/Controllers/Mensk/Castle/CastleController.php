<?php

namespace App\Http\Controllers\Mensk\Castle;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CastleController extends Controller
{
    public function main()
    {
        return view('mensk.castle.castle');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InventoryController extends Controller
{
    public function main() 
    {
    	return view('inventory');
    }
}

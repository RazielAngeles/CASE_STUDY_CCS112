<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Controllers\carController;
use Illuminate\Http\Request;

class carController extends Controller
{
    public function getCars()
    {$products = Item::all(); 
        
        return response()->json($products);
    }
}


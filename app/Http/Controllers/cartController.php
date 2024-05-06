<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function getCart()
    {$products = Item::all(); 
        
        return response()->json($products);
    }
}

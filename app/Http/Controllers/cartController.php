<?php

namespace App\Http\Controllers;

use App\Models\ItemCart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function getCart()
    {$products = ItemCart::all(); 
        
        return response()->json($products);
    }
}

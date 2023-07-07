<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    
    public function index()
    {
        return view('layouts.cart');
    }

    public function get_cart()
    {
        $cart = DB::table('carts')->where('user_id', Auth::user()->id)->get();
        return $cart;
    }

    public function add_cart (Request $request)
    {
        return $request;
        DB::table('carts')->where('user_id', Auth::user()->id)->update([
            'products_id' => $request->products_id,
            'quantity' => $request->quantity,
            'total_price' => $request->total_price,
        ]);
    }
}

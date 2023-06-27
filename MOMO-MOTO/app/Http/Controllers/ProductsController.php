<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    public function get_addproduct()
    {
        return view('layouts.addproduct');
    }

    public function store(Request $request)
    {
        Product::create([
            'mark' => $request->mark,
            'model' => $request->model,
            'price' => $request->price,
            'year' => $request->year,
            'milestone' => $request->milestone,
        ]);
    }

    public function get_products()
    {
        $products = Product::all();
        return $products;
    }
}

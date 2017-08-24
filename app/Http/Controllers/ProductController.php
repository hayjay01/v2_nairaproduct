<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $products = Product::with('user')->get();


        return response()->json(['success' => compact('products')]);
    }

    public function create()
    {
        # code...
    }

    public function store()
    {
        # code...
    }
    //
}

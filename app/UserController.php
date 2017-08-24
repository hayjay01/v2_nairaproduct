<?php

namespace App\Http\Controllers;

use App\Product

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
        $products = Product::all();

        return response()->json(['success', 'products']);
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

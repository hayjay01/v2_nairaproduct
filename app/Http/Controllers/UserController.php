<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
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
        $users = User::all();

        return response()->json(['success', compact('users')]);
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

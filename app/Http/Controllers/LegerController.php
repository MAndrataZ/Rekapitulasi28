<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegerController extends Controller
{
    public function index()
    {
        return view('leger.index');
    }

    public function show()
    {
        return view('leger.show');
    }
}

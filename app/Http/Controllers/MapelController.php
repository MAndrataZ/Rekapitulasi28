<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        return view('mapel.index');
    }

    public function create()
    {
        return view('mapel.create');
    }

    public function edit()
    {
        return view('mapel.edit');
    }
}

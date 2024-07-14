<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas.index');
    }

    public function show()
    {
        return view('kelas.show');
    }
    
    public function create()
    {
        return view('kelas.create');
    }
}

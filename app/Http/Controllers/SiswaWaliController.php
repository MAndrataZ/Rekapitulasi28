<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaWaliController extends Controller
{
    public function index()
    {
        return view('siswa-wali.index');
    }
    public function show()
    {
        return view('siswa-wali.show');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterKelasController extends Controller
{
    public function index()
    {
        return view('master-kelas.index');
    }

    public function create()
    {
        return view('master-kelas.create');
    }

    public function edit()
    {
        return view('master-kelas.edit');
    }
}

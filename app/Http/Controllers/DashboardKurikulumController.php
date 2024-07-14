<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardKurikulumController extends Controller
{
    public function index()
    {
        return view('dashboard-kurikulum.index');
    }

    public function masterSiswa(){
        return view('dashboard-kurikulum.master-siswa');
    }
}

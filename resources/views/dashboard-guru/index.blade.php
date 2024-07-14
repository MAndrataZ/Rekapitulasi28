@extends('layouts.front.main')

@section('container')
<section class="content">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
                <hr> <!-- Garis di bawah tulisan Dashboard -->
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-6">
                <p>Nama: {{ Auth::user()->nama }}</p>
                <p>Guru Wali: 8-A</p>
                <p>Guru Mapel: B.Indonesia</p>
            </div>
        </div>
    </div>
</section>
@endsection

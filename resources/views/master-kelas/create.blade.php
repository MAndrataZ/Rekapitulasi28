@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Kelas</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('master-kelas.index') }}">Kelas</a></li>
                <li class="breadcrumb-item active">Tambah Kelas</li>
            </ol>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Tambah Kelas
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nama">Kelas</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary float-right">Simpan</button>
    </div>
</div>
@endsection
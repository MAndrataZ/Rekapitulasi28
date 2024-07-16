@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Guru</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Guru</a></li>
                <li class="breadcrumb-item active">Tambah Guru</li>
            </ol>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Tambah Guru
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" name="nip" maxlength="50" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" maxlength="50" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mapel">Mapel</label>
                        <select class="form-control" name="mapel" required>
                            <option value="">Pilih Mapel</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="walas">Wali Kelas</label>
                        <select class="form-control" name="walas" required>
                            <option value="">Pilih Wali Kelas</option>
                            <option value="Kelas 1A">7-A</option>
                            <option value="Kelas 1B">7-B</option>
                            <option value="Kelas 2A">8-A</option>
                            
                        </select>
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

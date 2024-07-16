@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Siswa</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('kelas.index') }}">Kelas</a></li>
                <li class="breadcrumb-item"><a href="{{ route('kelas.show', 1) }}">Siswa</a></li>
                <li class="breadcrumb-item active">Input Nilai Siswa</li>
            </ol>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            Input Nilai
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="Asep" readonly>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mapel</th>
                            <th>Tugas</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Nilai Sumatif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B.Indonesia</td>
                            <td><input type="number" class="form-control w-50" value="70"></td>
                            <td><input type="number" class="form-control w-50" value="82"></td>
                            <td><input type="number" class="form-control w-50" value="75"></td>
                            <td><input type="number" class="form-control w-50" value="100"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary float-right">Simpan</button>
    </div>
</div>
@endsection

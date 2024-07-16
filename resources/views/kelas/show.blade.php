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
                <li class="breadcrumb-item active">Siswa</li>
            </ol>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            List Siswa
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Nilai Sumatif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>10124112</td>
                    <td>Asep</td>
                    <td>100</td>
                    <td>
                        <a href="{{ route('kelas.create') }}" class="btn btn-sm btn-success">Input Nilai</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

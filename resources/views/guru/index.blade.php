@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Guru</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Guru</li>
            </ol>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title">
            List Guru
        </div>
        <div class="float-right">
            <div class="btn-group">
                <a href="{{ route('guru.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Mapel</th>
                    <th>Wali Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>102081234</td>
                    <td>Rocky Gerung</td>
                    <td>Matematika</td>
                    <td>7-A</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('guru.edit', 1) }}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <a href="#!" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>102081234</td>
                    <td>Ahmad Supriadi</td>
                    <td>B.Indonesia</td>
                    <td>8-A</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('guru.edit', 1) }}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <a href="#!" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>102081234</td>
                    <td>Tuti Astuti</td>
                    <td>B.Inggris</td>
                    <td>7-C</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('guru.edit', 1) }}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <a href="#!" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

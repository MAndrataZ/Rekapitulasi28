@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Siswa</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
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
        <div class="float-right">
            <div class="btn-group">
                <a href="{{ route('siswa.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>102081234</td>
                    <td>Asep</td>
                    <td>8-A</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('siswa.edit', 1) }}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <a href="#!" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>102081091</td>
                    <td>Udin</td>
                    <td>8-A</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('siswa.edit', 1) }}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <a href="#!" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>102081256</td>
                    <td>Astuti</td>
                    <td>8-B</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('siswa.edit', 1) }}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                            <a href="#!" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

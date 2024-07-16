@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Siswa</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Siswa Kelas</li>
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
            <div class="card-title">
                <span>Guru Wali : {{ Auth::user()->nama }}</span> <br>
                <span>Kelas: 8-A</span>
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
                    <th>Leger</th>
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
                            <div class="btn-group">
                                <a href="{{ route('siswa-wali.show', 1) }}" class="btn btn-sm btn-info"><span class="fa fa-info"></span></a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

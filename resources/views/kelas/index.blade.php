@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kelas</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Kelas</li>
            </ol>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            List Kelas
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1-A Inggris</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('kelas.show', 1) }}" class="btn btn-sm btn-info"><span class="fa fa-info"></span></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1-B Inggris</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('kelas.show', 1) }}" class="btn btn-sm btn-info"><span class="fa fa-info"></span></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

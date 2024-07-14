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
        <div class="float-right">
            <div class="btn-group">
                <a href="{{ route('kelas.create') }}" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered" id="datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>7-A</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('kelas.edit', 1) }}" class="btn btn-sm btn-warning"><span class="fa fa-edit"></span></a>
                            <a href="#!" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

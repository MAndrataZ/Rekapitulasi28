@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Leger</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Leger</li>
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
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>8-A</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('leger.show', 1) }}" class="btn btn-sm btn-info"><span class="fa fa-info"></span></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>8-B</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('leger.show', 1) }}" class="btn btn-sm btn-info"><span class="fa fa-info"></span></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

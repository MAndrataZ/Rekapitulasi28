@extends('layouts.front.main')

@section('container')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Leger</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('siswa-wali.index') }}">Siswa</a></li>
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
        <table class="table table-striped table-bordered">

                <tr>
                    <th rowspan="2">No.</th>
                    <th rowspan="2">NIS</th>
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">8</th>
                    <th colspan="11">Mapel</th>
                </tr>
                <tr>
                    <td>B.Indonesia</td>
                    <td>B.Inggris</td>
                    <td>B.Sunda</td>
                    <td>Matematika</td>
                    <td>PAI</td>
                    <td>PKN</td>
                    <td>IPA</td>
                    <td>IPS</td>
                    <td>PLH</td>
                    <td>TIK</td>
                    <td>Penjas</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>191379813</td>
                    <td>Asep</td>
                    <td>A</td>
                    <td>100</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>191379890</td>
                    <td>Udin</td>
                    <td>A</td>
                    <td>100</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1913798095</td>
                    <td>Tuti</td>
                    <td>A</td>
                    <td>100</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                    <td>10</td>
                </tr>
        </table>
    </div>
</div>
@endsection

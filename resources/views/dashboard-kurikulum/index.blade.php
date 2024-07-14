@extends('layouts.front.main')

@section('container')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>150</h3>
          
                          <p>Jumlah Siswa</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-person"></i>
                        </div>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>35</h3>
          
                          <p>Jumlah Guru</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>20</h3>
          
                          <p>Jumlah Mata Pelajaran</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-danger">
                        <div class="inner">
                          <h3>8</h3>
          
                          <p>Jumlah Kelas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
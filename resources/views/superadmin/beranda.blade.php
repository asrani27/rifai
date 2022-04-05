@extends('layouts.app')
@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>Selamat Datang, {{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title text-center">APLIKASI PENGADUAN TENAGA KERJA <br />DINAS TENAGA KERJA DAN
                    TRANSMIGRASI
                    PROVINSI KALIMANTAN SELATAN
                </h3>
                <h4 class="text-center">By Muhammad Rifai</h4>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-list fa-3x"></i>
                <div class="info">
                    <h4>List Pengaduan</h4>
                    <p><b>{{$pengaduan}}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Pengadu</h4>
                    <p><b>{{$pengadu}}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Pengawas</h4>
                    <p><b>{{$pengawas}}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Penyidik</h4>
                    <p><b>{{$penyidik}}</b></p>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
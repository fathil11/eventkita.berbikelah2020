@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white">
                    <h1 class="text-lg-center">
                        <b>SELAMAT DATANG DI SISTEM PENGELOLAAN</b>
                    </h1>
                    <h3 class="text-lg-center">
                        LOMBA SEPEDA BERBUAT BIKE
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-sm-1">
                <!-- small card -->
                <div class="small-box bg-gradient-cyan">
                    <div class="inner">
                        <h3>{{ $stat['participants_count'] }}</h3>

                        <p>Peserta</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-1">
                <!-- small card -->
                <div class="small-box bg-gradient-red">
                    <div class="inner">
                    <h3>{{ $stat['unpaid_count'] }}</h3>

                        <p>Belum Bayar</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-1">
                <!-- small card -->
                <div class="small-box bg-gradient-teal">
                    <div class="inner">
                        <h3>{{ $stat['paid_count'] }}</h3>

                        <p>Lunas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.Container fluid-->
</section>
@endsection

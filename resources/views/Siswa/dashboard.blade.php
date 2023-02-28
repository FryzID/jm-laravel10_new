@extends('siswa.layouts.app')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="modal-header bg-gradient-success shadow-success border-radius-lg p-3">
                        <h3 class="text-white" id="judul">SELAMAT DATANG DI....</h3>
                    </div>
                </div>
                <div class="card-body">
                    HAI JSQWUDHEWIBHDFCKEWHCF SILANHKAN PILEH MENU
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class=" shadow-success border-radius-lg py-3 pe-1"
                        style="color: white !important; background-color: #ffb300 !important;">
                        <center><img src="{{ asset('assets/img/pict-dashboard/humas.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">

                    <h6 class="mb-0 ">JURNAL</h6>
                    <p class="text-sm "> <span class="font-weight-bolder"></span>Jangan Lupa Absen Ya kak!</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/humas/datahumas">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-dashboard/guru.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">RIWAYAT JURNAL</h6>
                    <p class="text-sm ">Beberapa Riwayat Absen Anda</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/humas/guru">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-info shadow-dark border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-dashboard/tapel.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">NILAI</h6>
                    <p class="text-sm ">Lihatlah nilai anda</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/humas/tapel">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-dark border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-dashboard/kelass.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">SERTIFIKAT</h6>
                    <p class="text-sm ">Cek sertifikat anda</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/humas/kelassiswa">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-dashboard/magang.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">Jurusan</h6>
                    <p class="text-sm ">Cari dan Tambah jurusan untuk siswa</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/humas/jurusan">Click Disini</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-light shadow-dark border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-dashboard/dudii.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">DU/DI</h6>
                    <p class="text-sm ">Pengelolaan Oleh DU/DI</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/humas/dudi">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
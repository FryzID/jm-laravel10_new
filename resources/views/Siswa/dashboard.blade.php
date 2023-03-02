@extends('siswa.layouts.app')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="modal-header bg-gradient-success shadow-success border-radius-lg p-3">
                        <h3 class="text-white" id="judul">SELAMAT DATANG {{ strtoupper(Auth::guard('siswa')->user()->nama_siswa) }}</h3>
                    </div>
                </div>
                <div class="card-body">
                    SILAHKAN PILIH MENU YANG ANDA BUTUHKAN DI SIJUMA
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="shadow-success border-radius-lg py-3 pe-1"
                        style="color: white !important; background-color: #0084ff !important;">
                        <center><img src="{{ asset('assets/img/pict-siswa/jurnal.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">JURNAL</h6>
                    <p class="text-sm "> <span class="font-weight-bolder"></span>Jangan Lupa Absen Ya kak!</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/siswa/jurnal">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-warning shadow-dark border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-siswa/riwayat.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">RIWAYAT JURNAL</h6>
                    <p class="text-sm ">Beberapa Riwayat Absen Anda</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/siswa/jurnal">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-info shadow-dark border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-siswa/nilai.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">NILAI NON TEKNIS</h6>
                    <p class="text-sm ">Lihatlah nilai anda</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/siswa/nilai-nonteknis">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-dark border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-siswa/sertifikat.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">SERTIFIKAT</h6>
                    <p class="text-sm ">Cek sertifikat anda</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a href="/siswa/sertifikat">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-siswa/jurusan.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">JURUSAN</h6>
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
                        <center><img src="{{ asset('assets/img/pict-siswa/dudi.png') }}" class="" width="300"
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
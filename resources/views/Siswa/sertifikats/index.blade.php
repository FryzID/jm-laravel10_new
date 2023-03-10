@extends('siswa.layouts.app')
@section('content')

<div class="container-fluid py-4 mt-3">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 account-detail mb-4 col-12">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-dark border-radius-lg py-3 pe-1">
                        <center><img src="{{ asset('assets/img/pict-siswa/sertifikat.png') }}" class="" width="300"
                                alt="main_logo"></center>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">SERTIFIKAT</h6>
                    <p class="text-sm ">Cek Sertifikat PKL Anda</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <a>{{ Auth::guard('siswa')->user()->nis }} -
                            {{ Auth::guard('siswa')->user()->nama_siswa }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-6 col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="modal-header bg-gradient-success shadow-success border-radius-lg p-3">
                                <h3 class="text-white" id="judul">{{ $title }}</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0 text-center" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Siswa PKL</th>
                                            <th scope="col">Nama Sertifikat</th>
                                            <th scope="col">Dokumen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $sertifikats as $sertifikat )
                                        @if($sertifikat->siswapkl->kelassiswa->siswa->siswa_id == Auth::guard('siswa')->user()->siswa_id)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $sertifikat->siswapkl->kelassiswa->kelas->level_kelas . ' ' . $sertifikat->siswapkl->kelassiswa->kelas->jurusan->nama_jurusan . ' ' . $sertifikat->siswapkl->kelassiswa->kelas->nama_kelas . ' ' . $sertifikat->siswapkl->kelassiswa->siswa->nama_siswa . ' ' . $sertifikat->siswapkl->kelassiswa->tapel->tapel }}
                                            </td>
                                            <td>{{ $sertifikat->nama_sertifikat }}</td>
                                            <td>
                                                <a href="{{ asset('storage/sertifikats/'. $sertifikat->dokumen) }}"
                                                    target="_blank" rel="noopener noreferrer">Lihat Sertifikat</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
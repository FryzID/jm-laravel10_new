@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="modal-header bg-gradient-success shadow-success border-radius-lg p-3">
                    <h3 class="text-white" id="judul">{{ $title }}</h3>
                </div>
            </div>
            <div class="card-body">
                <a type="button" class="btn btn-success mb-4" href="/humas/nilai-nonteknis-import">
                    <i class="fa fa-sign-in-alt"></i> Import Excel</a>
                <a type="button" class="btn btn-success mb-4" href="/humas/nilai-nonteknis-export">
                    <i class="fa fa-sign-out-alt"></i> Export Excel</a>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 text-center" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Siswa PKL</th>
                                <th scope="col">Aspek Penilaian</th>
                                <th scope="col">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $nilaitekniss as $nilaiteknis )
                            @if($nilaiteknis->siswapkl->guru->guru_id == Auth::guard('guru')->user()->guru_id)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $nilaiteknis->siswapkl->kelassiswa->kelas->level_kelas . ' ' . $nilaiteknis->siswapkl->kelassiswa->kelas->jurusan->nama_jurusan . ' ' . $nilaiteknis->siswapkl->kelassiswa->kelas->nama_kelas . ' ' . $nilaiteknis->siswapkl->kelassiswa->siswa->nama_siswa . ' ' . $nilaiteknis->siswapkl->kelassiswa->tapel->tapel }}</td>
                                <td>{{ $nilaiteknis->aspekpenilaian->aspek_penilaian }}</td>
                                <td>{{ $nilaiteknis->nilai }}</td>
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


@endsection
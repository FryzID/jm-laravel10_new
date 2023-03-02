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
                <a type="button" class="btn btn-success mb-4" href="/humas/jurnal-import">
                    <i class="fa fa-sign-in-alt"></i> Import Excel</a>
                <a type="button" class="btn btn-success mb-4" href="/humas/jurnal-export">
                    <i class="fa fa-sign-out-alt"></i> Export Excel</a>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 text-center" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Siswa PKL</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Absen Masuk</th>
                                <th scope="col">Absen Keluar</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach( $jurnals as $jurnal )
                            @if($jurnal->siswapkl->guru->guru_id == Auth::guard('guru')->user()->guru_id)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jurnal->siswapkl->kelassiswa->kelas->level_kelas . ' ' . $jurnal->siswapkl->kelassiswa->kelas->jurusan->nama_jurusan . ' ' . $jurnal->siswapkl->kelassiswa->kelas->nama_kelas . ' ' . $jurnal->siswapkl->kelassiswa->siswa->nama_siswa . ' ' . $jurnal->siswapkl->kelassiswa->tapel->tapel }}
                                </td>
                                <td>{{ $jurnal->tanggal }}</td>
                                <td>{{ $jurnal->absen_masuk }}</td>
                                <td>{{ $jurnal->absen_keluar }}</td>
                                <td>{{ $jurnal->keterangan }}</td>
                                <td>{{ $jurnal->kegiatan }}</td>
                                <td>
                                    @if( $jurnal->konfirmasi_dudi === 'diterima' )
                                    <span class="badge bg-gradient-success">Diterima</span>
                                    @elseif ( $jurnal->konfirmasi_dudi === 'tidak diterima' )
                                    <span class="badge bg-gradient-danger">Tidak Diterima</span>
                                    @else
                                    <span class="badge bg-gradient-warning">Dalam Proses</span>
                                    @endif
                                </td>
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
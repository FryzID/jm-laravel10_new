@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="modal-header bg-gradient-success shadow-success border-radius-lg p-3">
                    <h3 class="text-white" id="judul">{{ $title }}</h3>
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal"
                        data-bs-target="#form-create">
                        <i class="fa fa-plus"></i>
                    </button>
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
                                <th scope="col">Tanggal</th>
                                <th scope="col">Absen Masuk</th>
                                <th scope="col">Absen Keluar</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Konfirmasi Dudi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach( $jurnals as $jurnal )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jurnal->siswapkl->kelassiswa->kelas->level_kelas . ' ' . $jurnal->siswapkl->kelassiswa->kelas->jurusan->nama_jurusan . ' ' . $jurnal->siswapkl->kelassiswa->kelas->nama_kelas . ' ' . $jurnal->siswapkl->kelassiswa->siswa->nama_siswa . ' ' . $jurnal->siswapkl->kelassiswa->tapel->tapel }}
                                </td>
                                <td>{{ $jurnal->tanggal }}</td>
                                <td>{{ $jurnal->absen_masuk }}</td>
                                <td>{{ $jurnal->absen_keluar }}</td>
                                <td>{{ $jurnal->keterangan }}</td>
                                <td>{{ $jurnal->kegiatan }}</td>
                                <td>{{ $jurnal->konfirmasi_dudi }}</td>
                                <td class="budget">
                                    <span class="center">
                                        <a class="btn btn-circle btn-info border-0 m-1" onclick="getDetail()"
                                            data-toggle="modal" data-target="#form-detail{{ $jurnal->jurnal_id }}"><i
                                                class="fa fa-eye"></i></a>
                                        <a class="btn btn-circle btn-primary border-0 m-1" onclick="getEdit()"
                                            data-toggle="modal" data-target="#form-edit{{ $jurnal->jurnal_id }}"><i
                                                class="fa fa-pen"></i></a>
                                        <form action="/jurnal/{{ $jurnal->jurnal_id }}" method="post" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-circle btn-danger border-0 m-1"
                                                onclick="return confirm(' Apakah Kamu Yakin Akan Dihapus? ')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL -->
@include('jurnals.create')
{{-- @include('jurnals.edit')
@include('jurnals.detail') --}}

@endsection
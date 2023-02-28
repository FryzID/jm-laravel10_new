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
                <a type="button" class="btn btn-success mb-4" href="/humas/sertifikat-import">
                    <i class="fa fa-sign-in-alt"></i> Import Excel</a>
                <a type="button" class="btn btn-success mb-4" href="/humas/sertifikat-export">
                    <i class="fa fa-sign-out-alt"></i> Export Excel</a>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 text-center" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Siswa PKL</th>
                                <th scope="col">Nama Sertifikat</th>
                                <th scope="col">Dokumen</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $sertifikats as $sertifikat )
                            @if($sertifikat->siswapkl->dudi->dudi_id == Auth::guard('dudi')->user()->dudi_id)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sertifikat->siswapkl->kelassiswa->kelas->level_kelas . ' ' . $sertifikat->siswapkl->kelassiswa->kelas->jurusan->nama_jurusan . ' ' . $sertifikat->siswapkl->kelassiswa->kelas->nama_kelas . ' ' . $sertifikat->siswapkl->kelassiswa->siswa->nama_siswa . ' ' . $sertifikat->siswapkl->kelassiswa->tapel->tapel }}</td>
                                <td>{{ $sertifikat->nama_sertifikat }}</td>
                                <td>
                                    <a href="{{ asset('storage/sertifikats/'. $sertifikat->dokumen) }}" target="_blank" rel="noopener noreferrer">Lihat Sertifikat</a>
                                </td>
                                <td class="budget">
                                    <span class="center">
                                        <a class="btn btn-circle btn-info border-0 m-1" onclick="getDetail()"
                                            data-toggle="modal" data-target="#form-detail{{ $sertifikat->sertifikat_id }}"><i
                                                class="fa fa-eye"></i></a>
                                        <button class="btn btn-circle btn-primary border-0 m-1" data-bs-toggle="modal"
                                            data-bs-target="#form-edit{{ $sertifikat->sertifikat_id }}"><i
                                                class="fa fa-pen"></i></button>
                                        <form action="/humas/sertifikat/{{ $sertifikat->sertifikat_id }}" method="post"
                                            class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-circle btn-danger border-0 m-1"
                                                onclick="return confirm(' Apakah Kamu Yakin Akan Dihapus? ')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </span>
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

<!-- MODAL -->
@include('Dudi.sertifikats.create')
@include('Dudi.sertifikats.edit')

@endsection
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
                    <table class="table align-items-center mb-0 text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Dudi</th>
                                <th scope="col">Kelas Siswa</th>
                                <th scope="col">Guru</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $siswapkls as $siswapkl )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $siswapkl->dudi->nama_dudi }}</td>
                                <td>{{ $siswapkl->kelassiswa->kelas->level_kelas . ' ' . $siswapkl->kelassiswa->kelas->jurusan->nama_jurusan . ' ' . $siswapkl->kelassiswa->kelas->nama_kelas . ' ' . $siswapkl->kelassiswa->siswa->nama_siswa . ' ' . $siswapkl->kelassiswa->tapel->tapel }}
                                </td>
                                <td>{{ $siswapkl->guru->nama_guru }}</td>
                                <td class="budget">
                                    <span class="center">
                                        <a class="btn btn-circle btn-info border-0 m-1" onclick="getDetail()"
                                            data-toggle="modal"
                                            data-target="#form-detail{{ $siswapkl->siswapkl_id }}"><i
                                                class="fa fa-eye"></i></a>
                                        <a class="btn btn-circle btn-primary border-0 m-1" onclick="getEdit()"
                                            data-toggle="modal" data-target="#form-edit{{ $siswapkl->siswapkl_id }}"><i
                                                class="fa fa-pen"></i></a>
                                        <form action="/siswapkls/{{ $siswapkl->siswapkl_id }}" method="post"
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL -->
@include('siswapkls.create')
{{-- @include('siswapkls.edit')
@include('siswapkls.detail') --}}

@endsection
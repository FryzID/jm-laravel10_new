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
                <a type="button" class="btn btn-success mb-4" href="/humas/dudi-import">
                    <i class="fa fa-sign-in-alt"></i> Import Excel</a>
                <a type="button" class="btn btn-success mb-4" href="/humas/dudi-export">
                    <i class="fa fa-sign-out-alt"></i> Export Excel</a>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 text-center" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Dudi</th>
                                <th scope="col">Nama Dudi</th>
                                <th scope="col">Username</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach( $dudis as $dudi )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dudi->kode_dudi }}</td>
                                <td>{{ $dudi->nama_dudi }}</td>
                                <td>{{ $dudi->username }}</td>
                                <td>{{ $dudi->alamat }}</td>
                                <td>{{ $dudi->telepon }}</td>
                                <td>{{ $dudi->jurusan->nama_jurusan }}</td>
                                <td class="budget">
                                    <span class="center">
                                        <a class="btn btn-circle btn-info border-0 m-1" onclick="getDetail()"
                                            data-toggle="modal" data-target="#form-detail{{ $dudi->kode_dudi }}"><i
                                                class="fa fa-eye"></i></a>
                                        <button class="btn btn-circle btn-primary border-0 m-1" data-toggle="modal"
                                            data-target="#form-edit{{ $dudi->dudi_id }}"><i
                                                class="fa fa-pen"></i></button>
                                        <form action="/humas/dudi/{{ $dudi->dudi_id }}" method="post" class="d-inline">
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
@include('Humas.dudis.create')
<!-- @include('Humas.dudis.edit')
@include('Humas.dudis.detail') -->

@endsection
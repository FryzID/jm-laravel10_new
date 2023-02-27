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
                <a type="button" class="btn btn-success mb-4" href="/dudi/siswapkl-import">
                    <i class="fa fa-sign-in-alt"></i> Import Excel</a>
                <a type="button" class="btn btn-success mb-4" href="/dudi/siswapkl-export">
                    <i class="fa fa-sign-out-alt"></i> Export Excel</a>
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 text-center" id="dataTable" width="100%"
                        cellspacing="0">
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
                            @if($siswapkl->dudi_id == Auth::guard('dudi')->user()->dudi_id)
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

@endsection
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
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 text-center" id="dataTable" width="100%"
                        cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Siswa PKL</th>
                                <th scope="col">Nilai 1</th>
                                <th scope="col">Nilai 2</th>
                                <th scope="col">Nilai 3</th>
                                <th scope="col">Nilai 4</th>
                                <th scope="col">Nilai 5</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $nilainontekniss as $nilainonteknis )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $nilainonteknis->siswapkl->kelassiswa->kelas->level_kelas . ' ' . $nilainonteknis->siswapkl->kelassiswa->kelas->jurusan->nama_jurusan . ' ' . $nilainonteknis->siswapkl->kelassiswa->kelas->nama_kelas . ' ' . $nilainonteknis->siswapkl->kelassiswa->siswa->nama_siswa . ' ' . $nilainonteknis->siswapkl->kelassiswa->tapel->tapel }}
                                </td>
                                <td>{{ $nilainonteknis->nilai1 }}</td>
                                <td>{{ $nilainonteknis->nilai2 }}</td>
                                <td>{{ $nilainonteknis->nilai3 }}</td>
                                <td>{{ $nilainonteknis->nilai4 }}</td>
                                <td>{{ $nilainonteknis->nilai5 }}</td>
                                <td class="budget">
                                    <span class="center">
                                        <a class="btn btn-circle btn-info border-0 m-1" onclick="getDetail()"
                                            data-toggle="modal"
                                            data-target="#form-detail{{ $nilainonteknis->nilai_nonteknis_id }}"><i
                                                class="fa fa-eye"></i></a>
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
@endsection
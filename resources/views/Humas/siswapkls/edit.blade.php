<!-- Extra large modal -->
@foreach( $siswapkls as $siswapkl )
<div class="modal fade" id="form-edit{{ $siswapkl->siswapkl_id }}" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Edit {{ $title }}</h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/humas/siswapkl/{{ $siswapkl->siswapkl_id }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="input-group input-group-outline my-3">
                        <!-- {{-- <label  class="form-label">Dudi</label> --}} -->
                        <select class="form-control " id="exampleFormControlInput1" name="dudi_id" required>
                            <option value="">Pilih Dudi</option>
                            @foreach( $dudis as $dudi)
                            <option value="{{ $dudi->dudi_id }}">{{ $dudi->nama_dudi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <!-- {{-- <label  class="form-label">Kelas Siswa</label> --}} -->
                        <select class="form-control " id="exampleFormControlInput1" name="kelassiswa_id" required>
                            <option value="">Pilih Kelas Siswa</option>
                            @foreach( $kelassiswas as $kelassiswa)
                            <option value="{{ $kelassiswa->kelassiswa_id }}">
                                {{ $kelassiswa->kelas->level_kelas . ' ' . $kelassiswa->kelas->jurusan->nama_jurusan . ' ' . $kelassiswa->kelas->nama_kelas . ' ' . $kelassiswa->siswa->nama_siswa . ' ' . $kelassiswa->tapel->tapel }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <!-- {{-- <label  class="form-label">Guru</label> --}} -->
                        <select class="form-control " id="exampleFormControlInput1" name="guru_id" required>
                            <option value="">Pilih Guru</option>
                            @foreach( $gurus as $guru)
                            <option value="{{ $guru->guru_id }}">{{ $guru->nama_guru }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
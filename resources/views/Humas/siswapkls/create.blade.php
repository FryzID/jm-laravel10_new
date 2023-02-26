<!-- Extra large modal -->
<div class="modal fade" id="form-create" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Tambah {{ $title }}</h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-valide" action="/humas/siswapkl" method="post">
                <div class="modal-body">
                    @csrf
                    @method('post')
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
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>

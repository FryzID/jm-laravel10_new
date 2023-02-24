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
            <div class="modal-body">
                <form role="form text-left" action="/humas/jurnal" method="post">
                    @csrf
                    @method('post')
                    <div class="input-group input-group-outline my-3">
                        <select class="form-control " id="exampleFormControlInput1" name="siswapkl_id" required>
                            <option value="">Pilih Siswa PKL</option>
                            @foreach( $siswapkls as $siswapkl)
                            <option value="{{ $siswapkl->siswapkl_id }}">
                                {{ $siswapkl->kelassiswa->kelas->level_kelas . ' ' . $siswapkl->kelassiswa->kelas->jurusan->nama_jurusan . ' ' . $siswapkl->kelassiswa->kelas->nama_kelas . ' ' . $siswapkl->kelassiswa->siswa->nama_siswa . ' ' . $siswapkl->kelassiswa->tapel->tapel }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        {{-- <label class="form-label">Tanggal</label> --}}
                        <input type="date" class="form-control" name="tanggal" id="exampleFormControlInput1" required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Absen Masuk</label>
                        <input type="number" class="form-control" name="absen_masuk" id="exampleFormControlInput1"
                            required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Absen Keluar</label>
                        <input type="number" class="form-control" name="absen_keluar" id="exampleFormControlInput1"
                            required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="exampleFormControlInput1"
                            required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" id="exampleFormControlInput1" required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Konfirmasi Dudi</label>
                        <input type="number" class="form-control" name="konfirmasi_dudi" id="exampleFormControlInput1"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Kembali</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
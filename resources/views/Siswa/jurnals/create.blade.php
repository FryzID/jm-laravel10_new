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
            <form role="form text-left" action="/siswa/jurnal" method="post">
                <div class="modal-body">
                    @csrf
                    @method('post')
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" name="tanggal" value="{{ Auth::guard('siswa')->user()->nama_siswa }}"
                            id="exampleFormControlInput1" required readonly >
                            <input type="number" name="siswapkl_id" hidden value="{{ $siswapklid }}">
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <input type="date" class="form-control" name="tanggal" value="{{ $date }}"
                            id="exampleFormControlInput1" required >
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
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>
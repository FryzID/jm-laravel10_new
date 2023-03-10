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
            <form role="form text-left" action="/humas/dudi" method="post">
                <div class="modal-body">
                    @csrf
                    @method('post')
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Kode Dudi</label>
                        <input type="number" class="form-control" name="kode_dudi" id="exampleFormControlInput1"
                            required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nama Dudi</label>
                        <input type="text" class="form-control" name="nama_dudi" id="exampleFormControlInput1" required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="exampleFormControlInput1" required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Telepon</label>
                        <input type="number" class="form-control" name="telepon" id="exampleFormControlInput1" required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <input type="text" class="form-control" value="Dudi" name="level" id="exampleFormControlInput1"
                            required readonly>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <select class="form-control " id="exampleFormControlInput1" name="jurusan_id" required>
                            <option value="">Pilih Jurusan</option>
                            @foreach( $jurusan as $jurusans)
                            <option value="{{ $jurusans->jurusan_id }}">{{ $jurusans->nama_jurusan }}</option>
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
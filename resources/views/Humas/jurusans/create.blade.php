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
                <form class="form-valide" action="/humas/jurusan" method="post">
                    @csrf
                    @method('post')
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nama Jurusan</label>
                        <input type="text" class="form-control" name="nama_jurusan" id="exampleFormControlInput1"
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
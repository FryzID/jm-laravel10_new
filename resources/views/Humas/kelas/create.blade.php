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
            <form class="form-valide" action="/humas/kelas" method="post">
                <div class="modal-body">
                    @csrf
                    @method('post')
                    <div class="input-group input-group-outline my-3">
                        <!-- <label class="form-label">Jurusan</label> -->
                        <select class="form-control " id="exampleFormControlInput1" name="jurusan_id" required>
                            <option value="">Pilih Jurusan</option>
                            @foreach( $jurusan as $jurusans)
                            <option value="{{ $jurusans->jurusan_id }}">{{ $jurusans->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <!-- <label class="form-label">Level Kelas</label> -->
                        <select class="form-control " id="exampleFormControlInput1" name="level_kelas" required>
                            <option value="">Pilih Level Kelas</option>
                            @foreach( $level_kelas as $lvkls)
                            <option value="{{ $lvkls }}">{{ $lvkls }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <!-- <label class="form-label">Nama Kelas</label> -->
                        <select class="form-control " id="exampleFormControlInput1" name="nama_kelas" required>
                            <option value="">Pilih Nama Kelas</option>
                            @foreach( $nama_kelas as $nmkls)
                            <option value="{{ $nmkls }}">{{ $nmkls }}</option>
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

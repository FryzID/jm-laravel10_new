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
            <form class="form-valide" action="/dudi/sertifikat" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('post')
                    <div class="input-group input-group-outline my-3">
                        <!-- <label class="form-label">Kelas</label> -->
                        <select class="form-control " id="exampleFormControlInput1" name="siswapkl_id" required>
                            <option value="">Pilih Siswa PKL</option>
                            @foreach( $siswapkls as $siswapkl)
                            @if($siswapkl->dudi_id == Auth::guard('dudi')->user()->dudi_id)
                            <option value="{{ $siswapkl->siswapkl_id }}">
                                {{ $siswapkl->kelassiswa->kelas->level_kelas . ' | ' . $siswapkl->kelassiswa->kelas->jurusan->nama_jurusan . ' | ' . $siswapkl->kelassiswa->kelas->nama_kelas . ' | ' . $siswapkl->kelassiswa->siswa->nama_siswa . ' | ' . $siswapkl->kelassiswa->tapel->tapel }}
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nama Sertifikat</label>
                        <input type="text" class="form-control" name="nama_sertifikat" id="exampleFormControlInput1"
                            required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <input type="file" class="form-control" name="dokumen" id="exampleFormControlInput1"
                            required>
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

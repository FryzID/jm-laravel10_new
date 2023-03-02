<!-- Extra large modal -->
@foreach( $nilaitekniss as $nilaiteknis )
<div class="modal fade" id="form-edit{{ $nilaiteknis->nilai_nonteknis_id }}" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Edit {{ $title }}</h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dudi/nilai-nonteknis/{{ $nilaiteknis->nilai_nonteknis_id }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
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
                        <label class="form-label">Aspek Penilaian</label>
                        <input type="text" class="form-control" name="aspek_penilaian_id" id="exampleFormControlInput1"
                            placeholder="Input..." value="{{ old('aspek_penilaian_id', $nilaiteknis->aspek_penilaian_id) }}" required>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nilai</label>
                        <input type="text" class="form-control" name="nilai2" id="exampleFormControlInput1"
                            placeholder="Input..." value="{{ old('nilai', $nilaiteknis->nilai) }}" required>
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
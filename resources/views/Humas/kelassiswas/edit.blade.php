<!-- Extra large modal -->
@foreach( $kelassiswas as $kelassiswa )
<div class="modal fade" id="form-edit{{ $kelassiswa->kelassiswa_id }}" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Edit {{ $title }}</h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/humas/kelassiswa/{{ $kelassiswa->kelassiswa_id }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="input-group input-group-outline my-3">
                        <!-- <label class="form-label">Kelas</label> -->
                        <select class="form-control " id="exampleFormControlInput1" name="kelas_id" required>
                            <option value="">Pilih Kelas</option>
                            @foreach( $kelas as $kls)
                            <option value="{{ $kls->kelas_id }}">
                                {{ $kls->level_kelas . " " . $kls->jurusan->nama_jurusan . " " . $kls->nama_kelas }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <!-- <label class="form-label">Siswa</label> -->
                        <select class="form-control " id="exampleFormControlInput1" name="siswa_id" required>
                            <option value="">Pilih Siswa</option>
                            @foreach( $siswas as $siswa)
                            <option value="{{ $siswa->siswa_id }}">{{ $siswa->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3">
                        <!-- <label class="form-label">Tapel</label> -->
                        <select class="form-control " id="exampleFormControlInput1" name="tapel_id" required>
                            <option value="">Pilih Tapel</option>
                            @foreach( $tapels as $tapel)
                            <option value="{{ $tapel->tapel_id }}">{{ $tapel->tapel }}</option>
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
<!-- Extra large modal -->
@foreach( $jurusans as $jurusan )
<div class="modal fade" id="form-edit{{ $jurusan->jurusan_id }}" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Edit {{ $title }}</h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/humas/jurusan/{{ $jurusan->jurusan_id }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nama jurusan</label>
                        <input type="text" class="form-control" name="nama_jurusan" id="exampleFormControlInput1"
                            placeholder="Input..." value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}" required>
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
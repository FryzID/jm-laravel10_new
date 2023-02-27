<!-- Extra large modal -->
@foreach( $tapels as $tapel )
<div class="modal fade" id="form-edit{{ $tapel->tapel_id }}" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Edit {{ $title }}</h4>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/humas/tapel/{{ $tapel->tapel_id }}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Tahun Pelajaran</label>
                        <input type="number" class="form-control" name="tapel" id="exampleFormControlInput1"
                            placeholder="Input..." value="{{ old('tapel', $tapel->tapel) }}" required>
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
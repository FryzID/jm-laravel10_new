<!-- Extra large modal -->
@foreach( $dudis as $dudi )
<div class="modal fade bd-example-modal-md" id="form-detail{{ $dudi->kode_dudi }}" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="table-responsive">
                <table class="table" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Kode Transaksi</th>
                            <td>:</td>
                            <td>{{ $dudi->kdtrx_dudi }}</td>
                        </tr>
                        <tr>
                            <th>User Siswa</th>
                            <td>:</td>

                        </tr>
                        <tr>
                            <th>Bulan</th>
                            <td>:</td>
                            <td>{{ $dudi->bulan }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Bayar</th>
                            <td>:</td>
                            <td>{{ $dudi->tgl_bayar }}</td>
                        </tr>
                        <tr>
                            <th>Nominal Jumlah</th>
                            <td>:</td>
                            <td>{{ $dudi->jumlah }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <th>Di Input Pada</th>
                            <td>:</td>
                            <td>{{ $dudi->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Terakhir Update Pada</th>
                            <td>:</td>
                            <td>{{ $dudi->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endforeach

<?php

namespace App\Http\Controllers\Humas;

use App\Http\Controllers\Controller;
use App\Models\Jurnal;
use App\Models\SiswaPkl;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\JurnalExport;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Humas.jurnals.index', [
            'title' => "Transaksi Jurnal",
            'jurnals' => Jurnal::latest()->get(),
            'siswapkls' => SiswaPkl::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jurnals = $request->validate([
            'siswapkl_id' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'absen_masuk' => 'required|max:255',
            'absen_keluar' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'kegiatan' => 'required|max:255',
            'konfirmasi_dudi' => 'required|max:255',
        ]);

        Jurnal::create($jurnals);

        $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/humas/jurnal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function jurnalexport(){
        return Excel::download(new JurnalExport, 'Data-Jurnal.xlsx');
    }
}
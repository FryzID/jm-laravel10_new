<?php

namespace App\Http\Controllers\Dudi;

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
        return view('Dudi.jurnals.index', [
            'title' => "Data Jurnal Siswa PKL",
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
        //
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

    public function konfirmasi(Request $request, $id)
    {
        $jurnal = Jurnal::where('jurnal_id', $id)->first();
        $jurnal->konfirmasi_dudi = $request->konfirmasi_dudi;

        $jurnal->update();

        return redirect('/dudi/jurnal')->with('success', 'Selamat Berhasil Mengkonfimasi!!');
    }
}

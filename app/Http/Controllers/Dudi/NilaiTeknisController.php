<?php

namespace App\Http\Controllers\Dudi;

use App\Http\Controllers\Controller;
use App\Models\AspekPenilaianTeknis;
use App\Models\NilaiTeknis;
use App\Models\SiswaPkl;
use Illuminate\Http\Request;

class NilaiTeknisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilaitekniss = NilaiTeknis::all();
        return view('Dudi.nilai-teknis.index', compact('nilaitekniss'), [
            'title' => "Data Nilai Teknis Siswa PKL",
            'siswapkls' => SiswaPkl::all(),
            'aspekpenilaiantekniss' => AspekPenilaianTeknis::all(),
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
        $nilaiteknis = $request->validate([
            'siswapkl_id' => 'required|max:255',
            'aspek_penilaian_teknis_id' => 'required|max:255',
            'nilai' => 'required|max:255',
        ]);

        NilaiTeknis::create($nilaiteknis);

        $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
        return redirect('/dudi/nilai-teknis');
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
        NilaiTeknis::find($id)->update([
            'siswapkl_id' => $request->siswapkl_id, 'required|max:255',
            'aspek_penilaian_id' => $request->nilai1,  'required|max:255',
            'nilai' => $request->nilai2,  'required|max:255',
        ]);

        $request->session()->flash('success', 'Selamat Data Telah Diupdate!!');
        // kembalikan ke halaman post
        return redirect('/dudi/nilai-teknis');
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
}
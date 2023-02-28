<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\NilaiNonteknis;
use App\Models\SiswaPkl;
use Illuminate\Http\Request;

class NilaiNonteknisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilainontekniss = NilaiNonteknis::all();
        return view('Guru.nilai-nonteknis.index', compact('nilainontekniss'), [
            'title' => "Data Nilai Non Teknis Siswa PKL",
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
        $nilainonteknis = $request->validate([
            'siswapkl_id' => 'required|max:255',
            'nilai1' => 'required|max:255',
            'nilai2' => 'required|max:255',
            'nilai3' => 'required|max:255',
            'nilai4' => 'required|max:255',
            'nilai5' => 'required|max:255',
        ]);

        NilaiNonteknis::create($nilainonteknis);

        $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
        return redirect('/guru/nilai-nonteknis');
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
        NilaiNonteknis::find($id)->update([
            'siswapkl_id' => $request->siswapkl_id, 'required|max:255',
            'nilai1' => $request->nilai1,  'required|max:255',
            'nilai2' => $request->nilai2,  'required|max:255',
            'nilai3' => $request->nilai3,  'required|max:255',
            'nilai4' => $request->nilai4,  'required|max:255',
            'nilai5' => $request->nilai5,  'required|max:255',
        ]);

        $request->session()->flash('success', 'Selamat Data Telah Diupdate!!');
        // kembalikan ke halaman post
        return redirect('/dudi/nilai-nonteknis');
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

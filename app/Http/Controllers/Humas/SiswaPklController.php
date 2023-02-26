<?php

namespace App\Http\Controllers\Humas;

use App\Http\Controllers\Controller;
use App\Models\Dudi;
use App\Models\Guru;
use App\Models\KelasSiswa;
use App\Models\SiswaPkl;
use Illuminate\Http\Request;

class SiswaPklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswapkls = SiswaPkl::latest()->get();
        return view('Humas.siswapkls.index', compact('siswapkls'), [
            'title' => "Siswa PKL",
            'dudis' => Dudi::all(),
            'kelassiswas' => KelasSiswa::all(),
            'gurus' => Guru::all(),
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
        $siswapkls = $request->validate([
            'dudi_id' => 'required|max:255',
            'kelassiswa_id' => 'required|max:255',
            'guru_id' => 'required|max:255',
        ]);

        SiswaPkl::create($siswapkls);

        $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/humas/siswapkl');
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
}

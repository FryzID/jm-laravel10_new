<?php

namespace App\Http\Controllers\Humas;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\KelasSiswa;
use App\Models\Siswa;
use App\Models\Tapel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KelasSiswaExport;

class KelasSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelassiswas = KelasSiswa::latest()->get();
        return view('Humas.kelassiswas.index', compact('kelassiswas'), [
            'title' => "Kelas Siswa",
            'kelas' => Kelas::all(),
            'siswas' => Siswa::all(),
            'tapels' => Tapel::all(),
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
        $kelassiswas = $request->validate([
            'kelas_id' => 'required|max:255',
            'siswa_id' => 'required|max:255',
            'tapel_id' => 'required|max:255',
        ]);

        KelasSiswa::create($kelassiswas);

        $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/humas/kelassiswa');

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
    public function kelassiswaexport(){
        return Excel::download(new KelasSiswaExport, 'Data-KelasSiswa.xlsx');
    }
}

<?php

namespace App\Http\Controllers\Humas;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KelasExport;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelas::with('jurusan')->get();
        $level_kelas = ["XIII", "XII", "XI", "X"];
        $nama_kelas = ["A", "B", "C", "D"];
        return view('Humas.kelas.index', compact('data', 'level_kelas', 'nama_kelas'), [
            'title' => "Kelas",
            'kelas' => Kelas::latest()->get(),
            'jurusan' => Jurusan::all(),
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

        $kelas = $request->validate([
            'jurusan_id' => 'required|max:255',
            'level_kelas' => 'required|max:255',
            'nama_kelas' => 'required|max:255',
        ]);

        Kelas::create($kelas);

        $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/humas/kelas');
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
    public function kelasexport(){
        return Excel::download(new KelasExport, 'Data-Kelas.xlsx');
    }
}

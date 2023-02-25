<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::latest()->get();
        return view('Humas.siswas.index', compact('siswas'), [
            'title' => 'Siswa',
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
        $check = Siswa::where('nis', '=', $request->nis)->first();
        if ($check == null) {
            Siswa::create([
                'nis' => $request->nis, 'required|max:225|unique:siswas,nis',
                'nama_siswa' => $request->nama_siswa, 'required|max:225',
                'username' => $request->nama_siswa, 'required|max:225',
                'password' => bcrypt($request->nis),'required|max:225',
                'level' => $request->level, 'required|max:255',
            ]);

            $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
            return redirect('/humas/siswa');
        } else {
            return redirect('/humas/siswa')->with('warning', 'NIS Sudah Ada');
        }
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

<?php

namespace App\Http\Controllers;

use App\Models\Dudi;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DudiExport;

class DudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dudis.index', [
            'title' => "Data Dudi",
            'dudis' => Dudi::latest()->get(),
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
        Dudi::create([
            'kode_dudi' => $request->kode_dudi, 'required|max:255|unique:dudis,kode_dudi',
            'nama_dudi' => $request->nama_dudi,  'required|max:255',
            'username' => $request->nama_dudi, 'required|max:255',
            'password' => bcrypt($request->kode_dudi), 'required|max:255',
            'alamat' => $request->alamat, 'required|max:255',
            'telepon' => $request->telepon, 'required|max:255',
            'jurusan_id' => $request->jurusan_id, 'required|max:255',
        ]);

        $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/dudis');

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
        // $info = Info::where('id', $id)->first();
        $dudi = Dudi::find($id);
        return view('dudis.edit', ['dudi' => $dudi]);
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
        Dudi::find($id)->update([
            'kode_dudi' => $request->kode_dudi,
            'nama_dudi' => $request->nama_dudi,
            'username' => $request->username,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'jurusan_id' => $request->jurusan_id,
        ]);
        return redirect('dudis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dudi::find($id)->delete();
        return redirect('dudis')->with('success', 'Selamat Data Telah Dihapus!!');
    }

    public function dudiexport(){
        return Excel::download(new DudiExport, 'Data-Dudi.xlsx');
    }
}

<?php

namespace App\Http\Controllers\Humas;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\GuruExport;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::orderBy('guru_id', 'desc')->get();
        return view('Humas.gurus.index', compact('gurus'), [
            'title' => 'Guru'
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
        $check = Guru::where('nip', '=', $request->nip)->first();
        if ($check == null) {
            Guru::create([
                'nip' => $request->nip, 'required|max:225|unique:gurus,nip',
                'nama_guru' => $request->nama_guru, 'required|max:225',
                'username' => $request->nama_guru, 'required|max:225',
                'password' => bcrypt($request->nip),'required|max:225',
                'level' => $request->level, 'required|max:255',
            ]);
            
            $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
            // kembalikan ke halaman post
            return redirect('humas/guru');
        } else {
            return redirect('humas/guru')->with('warning', 'NIP Sudah Ada');
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
        Guru::find($id)->delete();
        return redirect('/humas/guru')->with('success', 'Selamat Data Telah Dihapus!!');
    }

    public function guruexport(){
        return Excel::download(new GuruExport, 'Data-Guru.xlsx');
    }
}

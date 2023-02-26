<?php

namespace App\Http\Controllers\Humas;

use App\Http\Controllers\Controller;
use App\Models\Humas;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HumasExport;

class HumasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $humas = Humas::latest()->get();
        return view('Humas.humas.index', compact('humas'), [
            'title' => 'Humas'
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
        $check = Humas::where('nip', '=', $request->nip)->first();
        if ($check == null) {
            Humas::create([
                'nip' => $request->nip, 'required|max:225|unique:humas,nip',
                'nama_humas' => $request->nama_humas, 'required|max:225',
                'username' => $request->nama_humas, 'required|max:225',
                'password' => bcrypt($request->nip),'required|max:225',
                'level' => $request->level, 'required|max:255',
            ]);

            $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
            return redirect('/humas/datahumas');
        } else {
            return redirect('/humas/datahumas')->with('warning', 'NIP Sudah Ada');
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
        Humas::find($id)->delete();
        return redirect('/humas/datahumas')->with('success', 'Selamat Data Telah Dihapus!!');
    }
    public function datahumasexport(){
        return Excel::download(new HumasExport, 'Data-Humas.xlsx');
    }
}

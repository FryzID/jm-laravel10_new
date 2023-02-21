<?php

namespace App\Http\Controllers;

use App\Models\Humas;
use Illuminate\Http\Request;

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
        return view('humas.index', compact('humas'), [
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
        Humas::create([
            'nip' => $request->nip, 'required|max:225|unique:humas,nip',
            'nama_humas' => $request->nama_humas, 'required|max:225',
            'username' => $request->nama_humas, 'required|max:225',
            'password' => bcrypt($request->nip),'required|max:225',
        ]);

        $request->session()->flash('success', 'Selamat Data Telah Ditambahkan!!');
        return redirect('humas');
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
        return redirect('humas')->with('success', 'Selamat Data Telah Dihapus!!');
    }
}

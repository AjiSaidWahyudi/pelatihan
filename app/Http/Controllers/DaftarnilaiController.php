<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftarnilai;
use App\Models\Siswa;

class DaftarnilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarnilai = Daftarnilai::all();
        return view('daftar_nilai.index', compact('daftarnilai'))->with('no',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view('daftar_nilai.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required',
            'mata_kuliah' => 'required',
            'nilai' => 'required|numeric',
        ]);
        Daftarnilai::create([
            'siswa_id' => $request->siswa_id,
            'mata_kuliah' => $request->mata_kuliah,
            'nilai' => $request->nilai,
        ]);
        return redirect()->route('daftar_nilai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftarnilai = Daftarnilai::find($id);
        return view('daftar_nilai.show', compact('daftarnilai'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftarnilai = Daftarnilai::find($id);
        $siswa = Siswa::all();
        return view('daftar_nilai.edit', compact('siswa', 'daftarnilai'));
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
        $validated = $request->validate([
            'siswa_id' => 'required',
            'mata_kuliah' => 'required',
            'nilai' => 'required|numeric',
        ]);
        $daftarnilai = Daftarnilai::find($id);
        $daftarnilai->update([
            'siswa_id' => $request->siswa_id,
            'mata_kuliah' => $request->mata_kuliah,
            'nilai' => $request->nilai,
        ]);
        return redirect()->route('daftar_nilai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarnilai = Daftarnilai::find($id);
        $daftarnilai->delete();
        return redirect()->route('daftar_nilai.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'))->with('no',1);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3|max:200',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'gender' => 'required',
            'no_hp' => 'required|numeric',
            'foto' => 'required|image',
        ]);
        $file = $request->file('foto');
        $namafile = $file->getClientOriginalName();
        $tujuan_upload = 'foto_siswa';
        $file->move($tujuan_upload, $namafile);
        Siswa::create([
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'no_hp' => $request->no_hp,
            'foto' => $namafile,
        ]);
        return redirect()->route('siswa.index');
    }

    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3|max:200',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'gender' => 'required',
            'no_hp' => 'required|numeric',
            'foto' => 'required|image',
        ]);
        $siswa = Siswa::find($id);
        $file = $request->file('foto');
        $namafile = $file->getClientOriginalName();
        $tujuan_upload = 'foto_siswa';
        \File::delete('foto_siswa/'.$siswa->foto);
        $file->move($tujuan_upload, $namafile);
        $siswa->update([
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'no_hp' => $request->no_hp,
            'foto' => $namafile,
        ]);
        return redirect()->route('siswa.index');
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        \File::delete('foto_siswa/'.$siswa->foto);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}

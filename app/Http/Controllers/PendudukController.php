<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduks = Penduduk::all();
        return view('penduduk', compact('penduduks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:penduduk',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ]);

        Penduduk::create($request->all());
        return redirect()->back()->with('success', 'Data penduduk berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $penduduk = Penduduk::findOrFail($id);

        $request->validate([
            'nik' => 'required|unique:penduduk,nik,' . $penduduk->id,
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ]);

        $penduduk->update($request->all());
        return redirect()->back()->with('success', 'Data penduduk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        $penduduk->delete();
        return redirect()->back()->with('success', 'Data penduduk berhasil dihapus!');
    }
}
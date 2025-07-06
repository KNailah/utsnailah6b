<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MatakuliahModel;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semuaData = MatakuliahModel::all(); // Fix: variabel harus sesuai dengan compact()
        return view('mk', compact('semuaData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mkinsert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_matakuliah' => 'required|string|max:255',
            'kode' => 'required|string|max:10|unique:matakuliah,kode', 
            'sks' => 'required|integer|min:1',
            'dosen_id' => 'required|exists:dosen,id', 
        ]);

        MatakuliahModel::create($request->all());

        return redirect()->route('mk-data')->with('success', 'Data mata kuliah berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $matakuliah = MatakuliahModel::findOrFail($id);
        return view('mkedit', compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $matakuliah = MatakuliahModel::findOrFail($id);

        $request->validate([
            'nama_matakuliah' => 'required|string|max:255',
            'kode' => 'required|string|max:10|unique:matakuliah,kode,' . $id, 
            'sks' => 'required|integer|min:1',
            'dosen_id' => 'required|exists:dosen,id',
        ]);

        $matakuliah->update($request->all());

        return redirect()->route('mk-data')->with('success', 'Data mata kuliah berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $matakuliah = MatakuliahModel::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('mk-data')->with('success', 'Data mata kuliah berhasil dihapus');
    }
}

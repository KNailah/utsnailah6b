<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RuangModel;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semuaData = RuangModel::all();
        return view('r', compact('semuaData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rinsert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruang' => 'required|string|max:255|unique:ruang,nama_ruang',
            'lokasi' => 'nullable|string|max:255',
        ]);

        RuangModel::create($request->all());

        return redirect()->route('ruang-data')->with('success', 'Data ruang berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ruang = RuangModel::findOrFail($id);
        return view('redit', compact('ruang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ruang = RuangModel::findOrFail($id);

      
        $request->validate([
            'nama_ruang' => 'required|string|max:255|unique:ruang,nama_ruang,' . $id,
            'lokasi' => 'nullable|string|max:255',
        ]);

        $ruang->update($request->all());

        return redirect()->route('ruang-data')->with('success', 'Data ruang berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ruang = RuangModel::findOrFail($id);
        $ruang->delete();

        return redirect()->route('ruang-data')->with('success', 'Data ruang berhasil dihapus');
    }
}

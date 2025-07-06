<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalkuliahModel;

class JadwalkuliahController extends Controller
{
   
     
    public function index()
    {
        $semuaData = JadwalkuliahModel::all();
        return view('jk', compact('semuaData')); 
    }

   
    public function create()
    {
        return view('jkinsert'); 
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'hari' => 'required|string|max:20',
            'jam' => 'required|string|max:10',
            'dosen_id' => 'required|exists:dosen,id',
            'matkul_id' => 'required|exists:matakuliah,id',
            'ruang_id' => 'required|exists:ruang,id',
        ]);

        JadwalkuliahModel::create($validated);

        return redirect()->route('jk-data')->with('success', 'Data jadwal berhasil disimpan');
    }

    
    
    public function edit($id)
    {
        $jadwal_kuliah = JadwalkuliahModel::findOrFail($id);
        return view('jkedit', compact('jadwal_kuliah'));
    }


    
    public function update(Request $request, $id)
    {
        $jadwal_kuliah = JadwalkuliahModel::findOrFail($id);

        $validated = $request->validate([
            'hari' => 'required|string|max:20',
            'jam' => 'required|string|max:10',
            'dosen_id' => 'required|exists:dosen,id',
            'matkul_id' => 'required|exists:matakuliah,id',
            'ruang_id' => 'required|exists:ruang,id',
        ]);

        $jadwal_kuliah->update($validated);

        return redirect()->route('jk-data')->with('success', 'Data jadwal berhasil diperbarui');
    }

    
    public function destroy($id)
    {
        $jadwal_kuliah = JadwalkuliahModel::findOrFail($id);
        $jadwal_kuliah->delete();

        return redirect()->route('jk-data')->with('success', 'Data jadwal berhasil dihapus');
    }
}

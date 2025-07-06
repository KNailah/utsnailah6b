<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DosenModel;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return view("dsninsert");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $semuaData = DosenModel::all();
        return view("dsn", compact('semuaData'));
    }

  
    

    public function store(Request $request)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'nidn' => 'required|unique:dosen,nidn',
            'bidang' => 'required',
        ]);

        DosenModel::create($request->all());

        return redirect()->route('dsn-data')->with('success', 'Data dosen berhasil disimpan');
    }

    public function edit($id)
    {
        $data = DosenModel::findOrFail($id);
        return view('dsnedit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $dosen = DosenModel::findOrFail($id);

        $request->validate([
            'nama_dosen' => 'required',
            'nidn' => 'required|unique:dosen,nidn,' . $dosen->id,
            'bidang' => 'required',
        ]);

        $dosen->update($request->all());

        return redirect()->route('dsn-data')->with('success', 'Data dosen berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dosen = DosenModel::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dsn-data')->with('success', 'Data dosen berhasil dihapus');
    }
}


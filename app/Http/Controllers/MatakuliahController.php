<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    // Menampilkan form tambah mata kuliah
    public function create()
    {
        return view('matakuliah.create');
    }

    // Memproses penyimpanan data mata kuliah
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|unique:matakuliahs,kode_matakuliah',
            'nama_matakuliah' => 'required',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        Matakuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,
        ]);
        return redirect()->route('matakuliah.create')
            ->with('success', 'Data mata kuliah berhasil ditambahkan!');
    }
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }
    // Menampilkan detail mata kuliah berdasarkan ID
    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);

        return view('matakuliah.show', compact('matakuliah'));
    }
}
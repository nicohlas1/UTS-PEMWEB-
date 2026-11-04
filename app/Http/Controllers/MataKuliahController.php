<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliah = MataKuliah::all();
        return view('matakuliah.index', compact('mataKuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        MataKuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan');
    }

    public function edit(MataKuliah $matakuliah) // Pastikan variabel sesuai dengan model binding
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, MataKuliah $matakuliah)
    {
        $matakuliah->update($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui');
    }

    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
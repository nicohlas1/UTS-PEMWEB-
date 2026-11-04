<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;
use App\Models\Mahasiswa;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function index()
    {
        // Mengambil data untuk ComboBox dan Tabel
        $mataKuliah = MataKuliah::all();
        $mahasiswa = Mahasiswa::all();
        
        return view('absensi.index', compact('mataKuliah', 'mahasiswa'));
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan array status absensi mahasiswa
        // Absensi::create([...]);
        
        return redirect()->back()->with('success', 'Data absensi tersimpan.');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; // 1. Tambahkan ini

class Matakuliah extends Model
{
    use HasUuids; // 2. Gunakan trait ini agar UUID otomatis dibuat

    protected $fillable = [
        'kode',
        'nama_matakuliah'
    ];

    // 3. Pastikan nama tabel disesuaikan dengan yang ada di migration
    protected $table = 'matakuliah'; 
}
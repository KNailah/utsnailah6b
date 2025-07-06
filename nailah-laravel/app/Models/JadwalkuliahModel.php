<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalkuliahModel extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kuliah';
    protected $fillable = ['hari', 'jam', 'dosen_id', 'matkul_id', 'ruang_id'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MatakuliahModel extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';
    protected $fillable = ['nama_matakuliah', 'kode', 'sks', 'dosen_id'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

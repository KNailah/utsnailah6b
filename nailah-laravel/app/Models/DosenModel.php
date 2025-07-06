<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class DosenModel extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $fillable = ['nama_dosen', 'nidn', 'bidang'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

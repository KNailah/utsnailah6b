<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RuangModel extends Model
{
    use HasFactory;

    protected $table = 'ruang';
    protected $fillable = ['nama_ruang', 'lantai'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

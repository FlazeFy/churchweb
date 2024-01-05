<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'kegiatan';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'tipe_jadwal', 'waktu_mulai', 'waktu_selesai', 'tempat', 'penanggung_jawab', 'keterangan', 'hasil', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at', 'deleted_by'];
}

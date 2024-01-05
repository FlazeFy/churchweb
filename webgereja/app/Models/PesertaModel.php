<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'peserta';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'sektor', 'ortu', 'jenis_kelamin', 'tipe_peserta', 'created_at', 'created_by', 'updated_at', 'updated_by'];
}

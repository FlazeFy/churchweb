<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuanganModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'keuangan';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'tipe', 'kategori', 'sektor', 'konteks', 'nominal', 'tanggal_terima', 'masuk_pada', 'created_at', 'created_by', 'updated_at', 'updated_by'];
}

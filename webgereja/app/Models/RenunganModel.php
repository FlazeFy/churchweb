<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RenunganModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'renungan';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul', 'perikop', 'isi', 'for_date', 'created_at', 'created_by', 'updated_at', 'updated_by'];
}

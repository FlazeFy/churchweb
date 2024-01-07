<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TataIbadahModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'tata_ibadah';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'tanggal', 'file_url', 'created_at', 'created_by', 'updated_at', 'updated_by'];
}

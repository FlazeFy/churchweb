<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JemaatModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'jemaat';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'jenis_kelamin', 'alamat', 'sektor', 'no_telp', 'status' ,'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at', 'deleted_by'];
}

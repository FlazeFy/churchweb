<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'pengurus';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'jabatan', 'img_url', 'created_at', 'created_by', 'updated_at', 'updated_by'];
}

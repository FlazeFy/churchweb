<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BphModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'bph';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'jabatan', 'grup', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at', 'deleted_by'];
}

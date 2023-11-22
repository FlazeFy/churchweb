<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WartaModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'warta';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul', 'url_warta', 'created_at', 'created_by'];
}

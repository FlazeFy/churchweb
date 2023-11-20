<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamusModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'kamus';
    protected $primaryKey = 'id';
    protected $fillable = ['kamus_slug', 'kamus_type', 'kamus_nama'];
}

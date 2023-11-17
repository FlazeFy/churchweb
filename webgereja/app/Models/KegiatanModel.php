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
    protected $fillable = ['id','kegiatan_type', 'title', 'description', 'additional_info', 'location', 'image_url', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'];
}

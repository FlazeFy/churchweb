<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerabotanModel extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $table = 'perabotan';
    protected $primaryKey = 'id';
    protected $fillable = ['id','perabotan_type', 'name', 'qty', 'image_url', 'created_at', 'updated_at', 'created_by', 'updated_by'];
}

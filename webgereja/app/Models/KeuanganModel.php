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
    protected $fillable = ['id','keuangan_type', 'context', 'amount', 'description', 'created_at', 'updated_at', 'created_by', 'updated_by'];
}

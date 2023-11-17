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
    protected $fillable = ['id','fullname', 'address', 'additional_info', 'phone', 'password', 'first_name', 'last_name', 'image_url', 'created_at', 'updated_at', 'created_by', 'updated_by'];
}

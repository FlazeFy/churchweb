<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class AdminModel extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;
    public $incrementing = false;

    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = ['id','username', 'email', 'phone', 'password', 'first_name', 'last_name', 'image_url', 'created_at', 'updated_at'];
}

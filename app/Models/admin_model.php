<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_model extends Model
{
    protected $primaryKey = 'id_admin';
    protected $table = "admin";
    public $timestamps = false;
    protected $fillable = [
        'nama_admin',
        'username',
        'no_hp',
        'password'        
    ];
}

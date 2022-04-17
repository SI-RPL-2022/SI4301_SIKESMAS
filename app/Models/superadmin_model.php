<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class superadmin_model extends Model
{
    protected $primaryKey = 'id_superadmin';
    protected $table = "super_admin";
    public $timestamps = false;
    protected $fillable = [
        'username',
        'password'
        
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluhan_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = "review";
    protected $fillable = [
        'id_pasien',
        'nama_pasien',
        'review'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluhan_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = "keluhan";
    public $timestamps = false;
    protected $fillable = [
        'nama_pasien',
        'alamat',
        'keluhan',
        'lama_keluhan'
    ];
}

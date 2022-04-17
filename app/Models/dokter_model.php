<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter_model extends Model
{
    protected $primaryKey = 'id_dokter';
    protected $table = "dokter";
    public $timestamps = false;
    protected $fillable = [
        'nama_dokter',
        'username',
        'poli_layanan',
        'jam_praktik_awal',     
        'jam_praktik_akhir',
        'password'        
    ];
}

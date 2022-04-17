<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien_model extends Model
{
    protected $primaryKey = 'id_pasien';
    protected $table = "pasien";
    public $timestamps = false;
    protected $fillable = [
        'no_bpjs',
        'nik', 
        'nama_pasien',
        'jenis_kelamin',
        'no_hp',
        'username',
        'password',
        'no_antrian',
        'foto_profil'
    ];

}

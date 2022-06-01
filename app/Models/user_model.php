<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = "user";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'role',
        'no_bpjs',
        'nik', 
        'nama',
        'jenis_kelamin',
        'no_hp',
        'username',
        'password',
        'no_antrian',
        'foto_profil',
        'id_poli',
        'jam_praktik_awal',
        'jam_praktik_akhir'
    ];

    public function poli()
    {
        return $this->belongsTo(poli_model::class,'id');
    }

}

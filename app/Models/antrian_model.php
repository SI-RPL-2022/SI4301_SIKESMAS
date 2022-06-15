<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrian_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = "antrian";
    protected $fillable = [
        'no_antrian',
        'id_pasien',
        'id_dokter',
        'id_poli',
        'id_kamar',
        'keluhan',
        'alamat',
        'lama_keluhan',   
        'hasil_periksa',   
        'tindakan',
        'waktu_periksa',
        'status',
        'status_antrian'
    ];

    public function poli()
    {
        return $this->belongsTo(poli_model::class,'id_poli');
    }
    public function pasien()
    {
        return $this->belongsTo(User::class,'id_pasien');
    }
    public function dokter()
    {
        return $this->belongsTo(User::class,'id_dokter');
    }
    public function kamar()
    {
        return $this->belongsTo(kamar_model::class,'id_kamar');
    }
}

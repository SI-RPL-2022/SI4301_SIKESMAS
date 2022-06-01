<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrian_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = "antrian";
    public $timestamps = false;
    protected $fillable = [
        'no_antrian',
        'id_pasien',
        'id_dokter',
        'id_poli',
        'keluhan',
        'alamat',
        'lama_keluhan',   
        'hasil_periksa',   
        'tindakan',
        'waktu_periksa',
        'status'
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
}

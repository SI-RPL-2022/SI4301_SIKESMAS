<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = "kamar_inap";
    public $timestamps = false;
    protected $fillable = [
        'nama_kamar',
        'tipe_kamar',
        'harga',
        'jumlah_kamar',
        'foto'
    ];
    public function antrian()
    {
        return $this->hasMany(antrian_model::class,'id_kamar');
    }
}

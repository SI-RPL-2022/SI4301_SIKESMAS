<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class poli_model extends Model
{
    protected $primaryKey = 'id';
    protected $table = "poli";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama_poli',
        'foto'
    ];

    public function user()
    {
        return $this->hasMany(User::class,'id_poli');
    }
    
    public function antrian()
    {
        return $this->hasMany(antrian_model::class,'id_poli');
    }
}

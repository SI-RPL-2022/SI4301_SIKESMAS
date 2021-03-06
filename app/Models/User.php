<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
        return $this->belongsTo(poli_model::class,'id_poli');
    }

    public function antrian()
    {
        return $this->hasMany(antrian_model::class,'id_pasien','id_dokter');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

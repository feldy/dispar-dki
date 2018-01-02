<?php

namespace App;

use App\Http\Controllers\User\DataPegawai\PegawaiController;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    //setting rename table m_user
    protected $table = 'm_user';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nama_pegawai', 'nomor_pegawai', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pegawai() {
        return PegawaiController::getPegawai(auth()->user()->id);
    }
}

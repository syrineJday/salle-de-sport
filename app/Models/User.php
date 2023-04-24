<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        "nom",
        "prenom",
        "email",
        "numTel",
        "numMobile",
        "adresse",
        "specialite",
        "cin",
        "role",
        "password",
        "date_naissance"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function abonnements(){
        return $this->belongsToMany(Abonnement::class, 'users_abonnements', 'user_id', 'abonnement_id');
    }

    public function isAdmin(){

        return str_contains(Auth::user()->role, 'ROLE_ADMIN');

    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "prenom",
        "email",
        "amount",
        "creditCard",
        "order_id",
        "expiratedDate",
        "cvc",
        "user_id",
        "abonnement_id",
        "seance_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function abonnement(){
        return $this->belongsTo(Abonnement::class);
    }

    public function seance(){
        return $this->belongsTo(Seance::class);
    }
}

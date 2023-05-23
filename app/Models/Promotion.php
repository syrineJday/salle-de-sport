<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "dateFin",
        "prix",
        "abonnement_id"
    ];

    public function abonnement(){
        return $this->belongsTo(Abonnement::class);
    }
}

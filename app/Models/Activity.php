<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        "label",
        "description",
        "prixSeance"
    ];
    
    public function abonnements(){
        return $this->belongsToMany(Abonnement::class, 'abonnement_activities', 'acitivty_id', 'abonnement_id');
    }

    

    public function seances(){
        return $this->hasMany(Seance::class);
    }

    public function avis(){
        return $this->hasMany(Avi::class);
    }
}

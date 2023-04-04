<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function abonnements(){
        return $this->belongsToMany(Abonnement::class, 'abonnement_activities', 'acitivty_id', 'abonnement_id');
    }
}

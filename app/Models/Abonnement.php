<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable = ["label", "prix", "type"];
    
    public function users(){
        return $this->belongsToMany(User::class, 'users_abonnements', 'abonnement_id', 'user_id');
    }

    public function activities(){
        return $this->belongsToMany(Activity::class, 'abonnement_activities', 'abonnement_id', 'activity_id');
    }
}

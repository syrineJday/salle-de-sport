<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = [
        "day",
        "startTime",
        "endTime",
        "user_id",
        "entraineur_id",
        "salle_id",
        "activity_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function entraineur(){
        return $this->belongsTo(User::class);
    }

    

    public function salle(){
        return $this->belongsTo(Salle::class);
    }

    public function activity(){
        return $this->belongsTo(Activity::class);
    }

    public function users(){
        return $this->belongsToMany(User::class, 'user_seances', 'seance_id', 'user_id')->withPivot('date');
    }
}

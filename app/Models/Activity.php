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
        "prix",
        "category_id"
    ];
    public function abonnements(){
        return $this->belongsToMany(Abonnement::class, 'abonnement_activities', 'acitivty_id', 'abonnement_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

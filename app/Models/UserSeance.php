<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSeance extends Model
{
    use HasFactory;

    protected $fillable = [
        "date",
        "user_id",
        "seance_id"
    ];

}

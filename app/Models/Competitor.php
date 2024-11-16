<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    protected $fillable = [
        'user_id',
        'competition_id',
        'round_id',
        'score'
    ];
}

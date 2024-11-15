<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'competition_id',
        'name',
        'year',
        'language',
        'points_correct',
        'points_incorrect',
        'points_blank', 
        'description'
    ];
}

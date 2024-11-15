<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'name',
        'year',
        'language',
        'points_correct',
        'points_incorrect',
        'points_blank', 
        'description'
    ];
}

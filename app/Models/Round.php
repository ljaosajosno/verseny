<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = [
        'competition_id',
        'round_name',
        'round_date',
        'description'
    ];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{

    protected $primaryKey = 'competitor_id';
    protected $fillable = [
        'user_id',
        'competition_id',
        'round_id',
        'score'
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class, 'competition_id');  
    }

    public function round()
    {
        return $this->belongsTo(Round::class, 'round_id'); 
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');  
    }
}

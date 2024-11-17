<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $primaryKey = 'round_id';  // Change 'id' to 'round_id'
    protected $fillable = [
        'competition_id',
        'round_name',
        'round_date',
        'description'
    ];

    public function competitors()
    {
        return $this->hasMany(Competitor::class, 'round_id');
    }

    
}

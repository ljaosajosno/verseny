<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{

    protected $primaryKey = 'competition_id';
    protected $fillable = [
        
        'name',
        'year',
        'language',
        'points_correct',
        'points_incorrect',
        'points_blank', 
        'description'
    ];

    public function competitors()
    {
        return $this->hasMany(Competitor::class, 'competition_id');  
    }
}

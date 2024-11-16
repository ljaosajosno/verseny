<?php

namespace App\Http\Controllers;

use App\Models\Competitor;
use Illuminate\Http\Request;

class CompetitorController extends Controller
{
    public function addCompetitor(Request $request){
        
        $input_fields = $request->validate([
            'user_id' => 'required',
            'competition_id' => 'required',
            'round_id' => 'required',
            'score' => 'nullable'
        ]);
    
        Competitor::create($input_fields);
        
        return redirect('/'); 
    }
}

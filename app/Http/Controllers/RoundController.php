<?php

namespace App\Http\Controllers;

use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    public function addRound(Request $request){
        
        $input_fields = $request->validate([
            'competition_id' => 'required',
            'round_name' => 'required',
            'round_date' => 'required',
            'description' => 'nullable'
        ]);
    
        Round::create($input_fields);
        
        return redirect('/'); 
    }
}

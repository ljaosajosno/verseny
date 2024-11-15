<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function addComp(Request $request){
    $input_fields = $request->validate([
        'compname' => 'required',
        'compyear' => 'required',
        'complang' => 'required',
        'compptscor' => 'required',
        'compptsemp' => 'required',
        'compptsinc' => 'required',
        'desc'=>[]
    ]);

    // Map the input fields to the database columns
    $input_fields['name'] = strip_tags($input_fields['compname']);
    $input_fields['year'] = $input_fields['compyear'];
    $input_fields['language'] = strip_tags($input_fields['complang']);
    $input_fields['points_correct'] = $input_fields['compptscor'];
    $input_fields['points_blank'] = $input_fields['compptsemp'];
    $input_fields['points_incorrect'] = $input_fields['compptsinc'];
    $input_fields['description'] = strip_tags($input_fields['desc']);

    // Remove the old fields from the input data
    unset($input_fields['compname'], $input_fields['compyear'], $input_fields['complang'], $input_fields['compptscor'], $input_fields['compptsemp'], $input_fields['compptsinc'], $input_fields['desc']);

    // Create the new Competition record
    Competition::create($input_fields);

    return redirect('/');
}

}

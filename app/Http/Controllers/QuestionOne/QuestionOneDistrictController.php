<?php

namespace App\Http\Controllers\QuestionOne;

use App\Http\Controllers\Controller;
use App\Models\QuestionOneDistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class QuestionOneDistrictController extends Controller
{
    public function index(Request $request)
    {
        $districts = QuestionOneDistrict::with('region')->get();
        // Where District Population Greater than
        if($request->input('population_greater_than') !== null){
            return collect($districts)->where('population', '>=', $request->input('population_greater_than'))->values();
        }
        // Where District population less than
        else if($request->input('population_less_than') !== null){
            return collect($districts)->where('population', '<=', $request->input('population_less_than'))->values();
        }

        return Response::json($districts, 200);
    }
}

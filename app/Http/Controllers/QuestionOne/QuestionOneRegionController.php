<?php

namespace App\Http\Controllers\QuestionOne;

use App\Http\Controllers\Controller;
use App\Models\QuestionOneRegion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class QuestionOneRegionController extends Controller
{
    public function index(Request $request)
    {
        // Get Regions of Malawi
        $regions = QuestionOneRegion::whereHas('districts', function ($query) use ($request) {
            // Optional Arguments

            // Where District population greater than
            if($request->input('population_greater_than') !== null){
                return $query->where('population', '>=', $request->input('population_greater_than'));
            }
            // Where District population less than
            else if($request->input('population_less_than') !== null){
                return $query->where('population', '<=', $request->input('population_less_than'));
            }

            return $query;
        })->with('districts')->get();

        $regionPopulations = [];

        // Append total district population to region
        foreach ($regions as $region) {
            $population = 0;
            foreach ($region['districts'] as $district) {
                $population += $district['population'];
            }
            $regionPopulations[] = collect($region)->merge([
                'population' => $population
            ]);
        }

        return Response::json($regionPopulations, 200);
    }
}

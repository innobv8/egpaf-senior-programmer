<?php

namespace App\Http\Controllers\QuestionThree;

use App\Http\Controllers\Controller;
use App\Models\QuestionThree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class QuestionThreeController extends Controller
{
    public function store()
    {
        // Alphanumeric values
        $values = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        // Length of string
        $length = 9;

        // Generate Random Alphanumeric String
        $generateString = substr(str_shuffle($values), 0, $length);

        // Check if Generated Alphanumeric String exists in Database
        $checkExisting = QuestionThree::where('string', $generateString)->first();

        // If Generated String does not exist in database
        if($checkExisting === null){
            // Check if there are any disabled strings, and enable one of those instead of creating a new string entry
            $checkDisabled = QuestionThree::where('disabled', true)->get();

            // If disabled strings are found, pick a random one and enable it
            if($checkDisabled->count() > 0){
                $selectRandom = $checkDisabled->random();

                // Enable randomly selected string
                $selectRandom->disabled = false;
                $selectRandom->save();

                return Response::json($selectRandom['string'], 200);
            }
            // If no disabled strings are found, save the generated string
            else{
                QuestionThree::create([
                    'string' => $generateString
                ]);

                return Response::json($generateString, 200);
            }
        }
        // If generated string already exists in the database, generate a new string by making a recursive call
        else {
            return $this->store();
        }
    }

    public function disable($string)
    {
        // Check if supplied string exists in the database
        $findString = QuestionThree::where('string', $string)->first();

        // If string exists in database
        if($findString !== null){
            // If the string is already disabled
            if($findString->disabled){
                return Response::json('String '.$string.' is already disabled', 409);
            }
            // If string is not disabled
            else{
                // Disable the string
                $findString->disabled = true;
                $findString->save();

                return Response::json('String '.$string.' has been disabled', 200);
            }
        }
        // If string does not exist in database
        else{
            return Response::json('String '.$string.' not available in database', 404);
        }
    }
}

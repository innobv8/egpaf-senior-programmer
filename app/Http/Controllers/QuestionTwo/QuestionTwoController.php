<?php

namespace App\Http\Controllers\QuestionTwo;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class QuestionTwoController extends Controller
{
    public function index($number)
    {
        return Response::json([
            'maxi' => $this->maxi($number),
            'mini' => $this->mini($number),
        ]);
    }

    public function maxi($number)
    {
        // Get length of the string
        $lengthOfString = strlen($number);

//        $rightMostDigit[$lengthOfString] = [0];

        // Get last digit in string
        $rightMostDigit[$lengthOfString - 1] = -1;

        // Get the index of the last digit in the string
        $lastDigitIndex = $lengthOfString - 1;

        for ($i = $lengthOfString - 2; $i >= 0; $i--) {
            if ($number[$i] < $number[$lastDigitIndex])
            {
                $rightMostDigit[$i] = $lastDigitIndex;
            }
            else {
                $rightMostDigit[$i] = -1;
                $lastDigitIndex = $i;
            }
        }

        for ($i = 0; $i < $lengthOfString; $i++) {
            if ($rightMostDigit[$i] != -1) {
                // swap digits
                list($number[$i],
                    $number[$rightMostDigit[$i]]) = [
                    $number[$rightMostDigit[$i]],
                    $number[$i]
                ];

                break;
            }
        }

        return $number;
    }

    public function mini($num)
    {
        $lengthOfString = strlen($num);
        $rightMostDigit = array_fill(0, $lengthOfString, -1);

        $rightMostDigit = $this->rightMostDigit($lengthOfString, $rightMostDigit);
        $right = $this->indexOfRightmostDigit($lengthOfString);

        for ($i = $lengthOfString - 2; $i >= 1; $i--) {
            if ($num[$i] > $num[$right])
                $rightMostDigit[$i] = $right;

            else {
                $rightMostDigit[$i] = -1;
                $right = $i;
            }
        }


        return $this->swapLastDigit($lengthOfString, $num, $rightMostDigit);
    }

    protected function indexOfRightmostDigit(int $lengthOfString): int
    {
        return $lengthOfString - 1;
    }

    protected function rightMostDigit(int $lengthOfString, array $rightMostDigit): array
    {
        $rightMostDigit[$lengthOfString - 1] = -1;
        return $rightMostDigit;
    }

    /**
     * @param int $lengthOfString
     * @param $num
     * @param array $rightMostDigit
     * @return mixed
     */
    protected function swapLastDigit(int $lengthOfString, $num, array $rightMostDigit)
    {
        $small = -1;
        for ($i = 1; $i < $lengthOfString; $i++)
            if ($num[$i] != '0') {
                if ($small == -1) {
                    if ($num[$i] < $num[0])
                        $small = $i;
                } else if ($num[$i] < $num[$small])
                    $small = $i;
            }

        if ($small != -1) {
            $tmp = $num[0];
            $num[0] = $num[$small];
            $num[$small] = $tmp;
        } else {
            for ($i = 1; $i < $lengthOfString; $i++) {
                if ($rightMostDigit[$i] != -1) {
                    $tmp = $num[$i];
                    $num[$i] = $num[$rightMostDigit[$i]];
                    $num[$rightMostDigit[$i]] = $tmp;
                    break;
                }
            }
        }
        return $num;
    }
}

<?php
namespace games\gcd;

use function \games\engine\getRoundData;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const RAND_MIN = 1;
const RAND_MAX = 100;

function run()
{
    $generateData = function () {
        $num1 = rand(RAND_MIN, RAND_MAX);
        $num2 = rand(RAND_MIN, RAND_MAX);
        $question = "$num1 $num2";
        $answer = getGcd($num1, $num2);
        return [$question, $answer];
    };

    getRoundData(DESCRIPTION, $generateData);
}

function getGcd($num1, $num2)
{
    for ($i = $num1; $i > 0; $i--) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            return $i;
        }
    }
}

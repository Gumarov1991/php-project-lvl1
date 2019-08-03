<?php
namespace games\prime;

use function \games\engine\engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const RAND_MIN = 0;
const RAND_MAX = 1000;

function run()
{
    $generateData = function () {
        $question = rand(RAND_MIN, RAND_MAX);
        $answer = isPrime($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    engine(DESCRIPTION, $generateData);
}

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

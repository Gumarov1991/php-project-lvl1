<?php
namespace games\even;

use function \games\engine\engine;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';
const RAND_MIN = 0;
const RAND_MAX = 100;

function run()
{
    $generateData = function () {
        $question = rand(RAND_MIN, RAND_MAX);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    engine(DESCRIPTION, $generateData);
}

function isEven($num)
{
    return $num % 2 === 0;
}

<?php
namespace games\progression;

use function \games\engine\getRoundData;

const DESCRIPTION = 'What number is missing in the progression?';
const RAND_MIN = 0;
const RAND_MAX = 20;
const RAND_MIN_STEP = 0;
const RAND_MAX_STEP = 10;
const SIZE_OF_PROGRESSION = 10;

function run()
{
    $generateData = function () {
        $start = rand(RAND_MIN, RAND_MAX);
        $step = rand(RAND_MIN_STEP, RAND_MAX_STEP);
        $progression = generateProgression($start, $step, SIZE_OF_PROGRESSION);
        $hiddenElementIndex = rand(0, sizeof($progression) - 1);
        $answer = $progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = '..';
        $question = implode(" ", $progression);
        return [$question, (string) $answer];
    };

    getRoundData(DESCRIPTION, $generateData);
}

function generateProgression($start, $step, $sizeOfProgression)
{
    $progression = [];
    $progressionElement = $start;
    for ($i = 0; $i < $sizeOfProgression; $i++) {
        $progression[] = $progressionElement;
        $progressionElement += $step;
    }
    return $progression;
}

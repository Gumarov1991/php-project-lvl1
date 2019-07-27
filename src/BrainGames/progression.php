<?php
namespace BrainGames\progression;

use function \BrainGames\Engine\runGame;
use const \BrainGames\Engine\LEVELS_COUNT;

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
        $progression = generateProgression($start, $step);
        $keyQuestion = rand(0, sizeof($progression) - 1);
        $answer = $progression[$keyQuestion];
        $progression[$keyQuestion] = '..';
        $question = implode(" ", $progression);
        return [$question, $answer];
    };

    runGame(DESCRIPTION, $generateData);
}

function generateProgression($start, $step)
{
    $progression = [];
    for ($i = 0; $i < SIZE_OF_PROGRESSION; $i++) {
        $progression[] = $start;
        $start += $step;
    }
    return $progression;
}

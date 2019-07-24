<?php
namespace BrainGames\Progression;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';
const RAND_MIN = 0;
const RAND_MAX = 20;
const RAND_MIN_STEP = 0;
const RAND_MAX_STEP = 10;
const SIZE_OF_PROGRESSION = 10;

function run()
{
    runGame(DESCRIPTION, getAllLevelsData());
}

function getAllLevelsData()
{
    $result = [];
    for ($i = 0; $i < \BrainGames\Engine\LEVELS_COUNT; $i++) {
        $result[] = getDataGame();
    }
    return $result;
}

function getDataGame()
{
    $progression = generateProgression();
    $keyQuestion = generateRandNum(0, sizeof($progression) - 1);
    $result = $progression[$keyQuestion];
    $progression[$keyQuestion] = '..';
    $question = implode(" ", $progression);
    return [$question, $result];
}

function generateProgression()
{
    $progression = [];
    $start = generateRandNum(RAND_MIN, RAND_MAX);
    $step = generateRandNum(RAND_MIN_STEP, RAND_MAX_STEP);
    for ($i = 0; $i < SIZE_OF_PROGRESSION; $i++) {
        $progression[] = $start;
        $start += $step;
    }
    return $progression;
}

function generateRandNum($minNum, $maxNum)
{
    return rand($minNum, $maxNum);
}

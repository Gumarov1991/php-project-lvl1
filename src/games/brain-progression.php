<?php
namespace BrainGames\Progression;

use function \BrainGames\Cli\runGame;

const GAME = 'progression';
const FUNC_NAME = 'checkProgression';
const RULES = 'What number is missing in the progression?';

function run()
{
    runGame(GAME);
}

function checkProgression()
{
    $arr = generateArrProgression();
    $keyQuestion = rand(0, 9);
    $result = $arr[$keyQuestion];
    $arr[$keyQuestion] = '..';
    $question = implode(" ", $arr);
    return [$question, $result];
}

function generateArrProgression()
{
    $arr = [];
    $start = rand(0, 20);
    $step = rand(1, 10);
    for ($i = 0; $i < 10; $i++) {
        $arr[] = $start;
        $start += $step;
    }
    return $arr;
}

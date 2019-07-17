<?php
namespace BrainGames\Progression;

use function \cli\line;

const RULES = 'What number is missing in the progression?';

function progression()
{
    $arr = generateArrProgression();
    $keyQuestion = rand(0, 10);
    $result = $arr[$keyQuestion];
    $arr[$keyQuestion] = '..';
    $strQuestion = implode(" ", $arr);
    line("Question: {$strQuestion}");
    return $result;
}

function generateArrProgression()
{
    $arr = [];
    $startNumber = rand(0, 20);
    $step = rand(1, 10);
    for ($i = 0; $i < 10; $i++) {
        $arr[] = $startNumber;
        $startNumber += $step;
    }
    return $arr;
}

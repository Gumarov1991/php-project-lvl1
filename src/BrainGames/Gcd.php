<?php
namespace BrainGames\Gcd;

use function \BrainGames\Engine\runGame;
use const \BrainGames\Engine\LEVELS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';
const RAND_MIN = 1;
const RAND_MAX = 100;

function run()
{
    runGame(DESCRIPTION, getAllLevelsData());
}

function getAllLevelsData()
{
    $result = [];
    for ($i = 0; $i < LEVELS_COUNT; $i++) {
        $result[] = getDataGame();
    }
    return $result;
}

function getDataGame()
{
    $num1 = generateRandNum();
    $num2 = generateRandNum();
    $question = "$num1 $num2";
    $result = getGcd($num1, $num2);
    return [$question, $result];
}

function getGcd($num1, $num2)
{
    for ($i = $num1; $i > 0; $i--) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            return $i;
        }
    }
}

function generateRandNum()
{
    return rand(RAND_MIN, RAND_MAX);
}

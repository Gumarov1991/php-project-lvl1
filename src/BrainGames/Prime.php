<?php
namespace BrainGames\Prime;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const RAND_MIN = 1;
const RAND_MAX = 1000;

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
    $num = generateRandNum();
    $result = isPrime($num) ? 'yes' : 'no';
    return [$num, $result];
}

function generateRandNum()
{
    return rand(RAND_MIN, RAND_MAX);
}

function isPrime($num)
{
    if ($num === 1) {
        return false;
    }
    for ($i = 2; $i <= $num; $i++) {
        if ($i === $num) {
            return true;
        }
        if ($num % $i === 0) {
            return false;
        }
    }
}

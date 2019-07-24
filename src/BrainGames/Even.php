<?php
namespace BrainGames\Even;

use function \BrainGames\Engine\runGame;
use const \BrainGames\Engine\LEVELS_COUNT;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';
const MIN_RAND = 0;
const MAX_RAND = 100;

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
    $num = generateRandNum();
    $result = isEven($num) ? 'yes' : 'no';
    return [$num, $result];
}

function generateRandNum()
{
    return rand(MIN_RAND, MAX_RAND);
}

function isEven($num)
{
    return $num % 2 === 0;
}

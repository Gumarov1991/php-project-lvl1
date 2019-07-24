<?php
namespace BrainGames\Calc;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];
const RAND_MIN = 0;
const RAND_MAX = 30;


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
    $num1 = generateRandNum();
    $num2 = generateRandNum();
    $randKey = array_rand(OPERATORS);
    $operator = OPERATORS[$randKey];
    $question = "$num1 $operator $num2";
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
    }
    return [$question, $result];
}

function generateRandNum()
{
    return rand(RAND_MIN, RAND_MAX);
}

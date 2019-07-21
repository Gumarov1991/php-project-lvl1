<?php
namespace BrainGames\Calc;

use function \BrainGames\Cli\runGame;

const GAME = 'calc';
const FUNC_NAME = 'toCalculate';
const RULES = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];


function run()
{
    runGame(GAME);
}

function toCalculate()
{
    $num1 = rand(0, 30);
    $num2 = rand(0, 30);
    $key = array_rand(OPERATORS);
    $operator = OPERATORS[$key];
    $question = "{$num1} {$operator} {$num2}";
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


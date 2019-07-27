<?php
namespace BrainGames\calc;

use function \BrainGames\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];
const RAND_MIN = 0;
const RAND_MAX = 30;

function run()
{
    $generateData = function () {
        $num1 = rand(RAND_MIN, RAND_MAX);
        $num2 = rand(RAND_MIN, RAND_MAX);
        $randKey = array_rand(OPERATORS);
        $operator = OPERATORS[$randKey];
        $question = "$num1 $operator $num2";
        switch ($operator) {
            case '+':
                $answer = $num1 + $num2;
                break;
            case '-':
                $answer = $num1 - $num2;
                break;
            case '*':
                $answer = $num1 * $num2;
        }
        return [$question, $answer];
    };

    runGame(DESCRIPTION, $generateData);
}

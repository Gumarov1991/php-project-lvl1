<?php
namespace BrainGames\Calc;

use function \cli\line;

const RULES = 'What is the result of the expression?';

function calc()
{
    $operators = ['+', '-', '*'];
    $num1 = rand(0, 30);
    $num2 = rand(0, 30);
    $key = array_rand($operators);
    $expression = "{$num1} {$operators[$key]} {$num2}";
    line("Question: {$expression}");
    eval("\$result = " . $expression . ";");
    return $result;
}

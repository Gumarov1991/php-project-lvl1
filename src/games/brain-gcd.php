<?php
namespace BrainGames\Gcd;

use function \BrainGames\Cli\runGame;

const GAME = 'gcd';
const FUNC_NAME = 'getGcd';
const RULES = 'Find the greatest common divisor of given numbers.';

function run()
{
    runGame(GAME);
}

function getGcd()
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $question = "{$num1} {$num2}";
    for ($i = $num1; $i > 0; $i--) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            $result = $i;
            break;
        }
    }
    return [$question, $result];
}

<?php
namespace BrainGames\Prime;

use function \BrainGames\Cli\runGame;

const GAME = 'prime';
const FUNC_NAME = 'isPrime';
const RULES = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    runGame(GAME);
}

function isPrime()
{
    $num = rand(1, 1000);
    $question = $num;
    if ($num === 1) {
        $result = 'no';
    }
    for ($i = 2; $i <= $num; $i++) {
        if ($i === $num) {
            $result = 'yes';
            break;
        }
        if ($num % $i === 0) {
            $result = 'no';
            break;
        }
    }
    return [$question, $result];
}

<?php
namespace BrainGames\Even;

use function \BrainGames\Cli\runGame;

const GAME = 'even';
const FUNC_NAME = 'checkEven';
const RULES = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    runGame(GAME);
}

function checkEven()
{
    $num = rand(0, 100);
    $question = $num;
    $result = isEven($num) ? 'yes' : 'no';
    return [$question, $result];
}

function isEven($num)
{
    return $num % 2 === 0;
}
<?php
namespace BrainGames\Even;

use function \cli\line;

const RULES = 'Answer "yes" if number even otherwise answer "no".';

function even()
{
    $num = rand(0, 100);
    line("Question: {$num}");
    return $num % 2 === 0 ? "yes" : "no";
}

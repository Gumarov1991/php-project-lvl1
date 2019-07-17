<?php
namespace BrainGames\Prime;

use function \cli\line;

const RULES = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function prime()
{
    $num = rand(1, 1000);
    line("Question: {$num}");
    if ($num === 1) {
        return 'no';
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return 'no';
        }
    }
    return 'yes';
}

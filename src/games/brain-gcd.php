<?php
namespace BrainGames\Gcd;

use function \cli\line;

const RULES = 'Find the greatest common divisor of given numbers.';

function gcd()
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    line("Question: {$num1} {$num2}");
    for ($i = $num1; $i > 0; $i--) {
        if ($num1 % $i === 0) {
            if ($num2 % $i === 0) {
                return $i;
            }
        } 
    }
}

<?php
namespace BrainGames\Engine;

use function \BrainGames\Even\even;
use function \cli\line;
use function \cli\prompt;

function rules($text)
{
    return $text;
}

function game()
{   
    for ($i = 0; $i < 3; $i++) {
        $num = rand(0, 100);
        line("Question: {$num}");
        $answerPlayer = prompt("Your answer");
        $answerCorrect = even($num) ? "yes" : "no";
        if ($answerPlayer === $answerCorrect) {
            line("Correct!");
        } else {
            line("'{$answerPlayer}' is wrong answer ;(. Correct answer was '{$answerCorrect}'.");
            return false;
        }
    }
    return true;
}
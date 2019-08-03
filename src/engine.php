<?php
namespace games\engine;

use function \cli\line;
use function \cli\prompt;

const LEVELS_COUNT = 3;

function engine($description, $getDataGame)
{
    line('Welcome to the Brain Game!');
    line($description);
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    for ($i = 0; $i < LEVELS_COUNT; $i++) {
        [$question, $correctAnswer] = $getDataGame();
        line("Question: {$question}");
        $answerPlayer = prompt("Your answer");
        if ($answerPlayer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answerPlayer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$playerName}!");
            return;
        }
    }
    line("Congratulations, {$playerName}!");
}

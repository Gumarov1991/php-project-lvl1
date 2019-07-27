<?php
namespace BrainGames\engine;

use function \cli\line;
use function \cli\prompt;

const LEVELS_COUNT = 3;

function runGame($description, $getDataGame)
{
    line('Welcome to the Brain Game!');
    line($description);
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    for ($i = 0; $i < LEVELS_COUNT; $i++) {
        [$questionGame, $answerCorrect] = $getDataGame();
        line("Question: {$questionGame}");
        $answerPlayer = prompt("Your answer");
        if ((string) $answerPlayer === (string) $answerCorrect) {
            line("Correct!");
        } else {
            line("'{$answerPlayer}' is wrong answer ;(. Correct answer was '{$answerCorrect}'.");
            line("Let's try again, {$playerName}!");
            return;
        }
    }
    line("Congratulations, {$playerName}!");
}

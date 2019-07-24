<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const LEVELS_COUNT = 3;

function runGame($description, $dataGames)
{
    line('Welcome to the Brain Game!');
    line($description);
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    if (engine($description, $dataGames)) {
        line("Congratulations, {$playerName}!");
    } else {
        line("Let's try again, {$playerName}!");
    };
}

function engine($description, $dataGames)
{
    foreach ($dataGames as $dataGame) {
        [$questionGame, $answerCorrect] = $dataGame;
        line("Question: {$questionGame}");
        $answerPlayer = prompt("Your answer");
        if ((string) $answerPlayer === (string) $answerCorrect) {
            line("Correct!");
        } else {
            line("'{$answerPlayer}' is wrong answer ;(. Correct answer was '{$answerCorrect}'.");
            return false;
        }
    }
    return true;
}

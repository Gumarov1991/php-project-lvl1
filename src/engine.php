<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

function engine($game)
{
    for ($i = 0; $i < 3; $i++) {
        $funcGame = '\\BrainGames\\' . $game . '\\' . $game;
        $answerCorrect = $funcGame();
        $answerPlayer = prompt("Your answer");
        if ((int) $answerPlayer === (int) $answerCorrect) {
            line("Correct!");
        } else {
            line("'{$answerPlayer}' is wrong answer ;(. Correct answer was '{$answerCorrect}'.");
            return false;
        }
    }
    return true;
}

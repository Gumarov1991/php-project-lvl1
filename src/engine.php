<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;


const LEVELS_COUNT = 3;

function engine($game)
{
    $gameFunction = "\\BrainGames\\" . $game . "\\" . constant("\\BrainGames\\" . $game . "\\FUNC_NAME");
    for ($i = 0; $i < LEVELS_COUNT; $i++) {
        [$questionGame, $answerCorrect] = $gameFunction();
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

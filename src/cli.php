<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

function runGame($game)
{
    line('Welcome to the Brain Game!');
    $gameRules = "\\BrainGames\\" . $game . "\\RULES";
    line(constant($gameRules));
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    if (engine($game)) {
        line("Congratulations, {$playerName}!");
    } else {
        line("Let's try again, {$playerName}!");
    };
}

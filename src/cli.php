<?php
namespace BrainGames\Сli;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\rules;
use function \BrainGames\Engine\engine;

function run($game)
{
    line('Welcome to the Brain Game!');
    $gameConst = "\\BrainGames\\" . $game . "\\RULES";
    line(constant($gameConst));
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    if (engine($game)) {
        line("Congratulations, {$playerName}!");
    } else {
        line("Let's try again, {$playerName}!");
    };
}

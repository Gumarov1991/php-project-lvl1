<?php
namespace BrainGames\Сli;

use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\rules;
use function \BrainGames\Engine\game;

function run()
{
    line('Welcome to the Brain Game!');
    line(rules(\BrainGames\Even\RULES));
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);
    if (game()) {
        line("Congratulations, {$playerName}!");
    } else {
        line("Let's try again, {$playerName}!");
    };
}

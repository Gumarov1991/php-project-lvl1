<?php
namespace BrainGames\Even;

const RULES = 'Answer "yes" if number even otherwise answer "no".';
function even($num)
{
    return $num % 2 === 0;
}
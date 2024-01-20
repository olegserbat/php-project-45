<?php

namespace BrainGames\Cli;

define('DESCRIPTION_FOR_EVEN', 'Answer "yes" if the number is even, otherwise answer "no".');

function giveArrayForEven(): array
{
    $result = [];
    for ($i = 0; $i < NUMBER_OF_QUSTIONS; $i++) {
        $digit = rand(0, 100);
        $digit % 2 == 0 ? $rightAnswer = 'yes' : $rightAnswer = 'no';
        $result[$digit] = $rightAnswer;
    }
    return $result;
}

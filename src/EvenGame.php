<?php

namespace BrainGames\Cli;

function giveDescriptionForEven():string
{
     return 'Answer "yes" if the number is even, otherwise answer "no".';

}

function giveArrayForEven():array
{
    $result = [];
    for ($i = 0; $i < 3; $i++) {
        $digit = rand(0, 100);
        $digit % 2 == 0 ? $rightAnswer = 'yes' : $rightAnswer = 'no';
        $result[$digit] = $rightAnswer;
    }
    return $result;
}
<?php

namespace BrainGames\Cli;

define('DESCRIPTION_FOR_CALC', 'What is the result of the expression?');

function giveArrayForCalc(): array
{
    $result = [];
    for ($i = 0; $i < NUMBER_OF_QUSTIONS; $i++) {
        $a = rand(0, 100);
        $b = rand(0, 100);
        $mark = substr('+-*', rand(0, 2), 1);
        $key = "{$a} {$mark} {$b}";
        $rightAnswer = 0;
        switch ($mark) {
            case '+':
                $rightAnswer = $a + $b;
                break;
            case '-':
                $rightAnswer = $a - $b;
                break;
            case '*':
                $rightAnswer = $a * $b;
                break;
        }
        $result[$key] = $rightAnswer;
    }
    return $result;
}

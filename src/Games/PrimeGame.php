<?php

namespace BrainGames\Cli;

define('DESCRIPTION_FOR_PRIME', 'Answer "yes" if given number is prime. Otherwise answer "no".');

function checkPrime(): array
{
    $limit = 1000;   //предел выбора чисел условно, для простоты игры, установлен 1000, можно любой другой
    $a = rand(2, $limit);
    $result = [];
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i === 0) {
            $result[$a] = 'no';
            return $result;
        }
    }
    $result[$a] = 'yes';
    return $result;
}

function giveArrayForPrime(): array
{
    $result = [];
    while (count($result) < NUMBER_OF_QUSTIONS) {
        foreach (checkPrime() as $key => $value) {
            $result[$key] = $value;
        }
    }
    return $result;
}

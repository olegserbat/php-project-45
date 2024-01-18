<?php

namespace  BrainGames\Cli;

function giveDescriptionsForProgression(): string
{
    return 'What number is missing in the progression?';
}

function giveArrayForProgression(): array
{
    $result = [];
    for ($i = 0; $i < 3; $i++) {
        foreach (getProgressive() as $key => $value) {
            $result[$key] = $value;
        }
    }
    return $result;
}

function getProgressive(): array
{
    $long = rand(5, 11);
    $x = rand(0, ($long - 1));
    $start = rand(0, 20);
    $increase = rand(2, 6);
    $progression = [];
    $progression[0] = $start;
    $result = [];
    for ($i = 0; $i < $long; $i++) {
        $progression[] = $progression[$i] + $increase;
    }
    $rightAnswer = $progression[$x];
    $progression[$x] = '..';
    $qustion = implode(' ', $progression);
    $result[$qustion] = $rightAnswer;
    return $result;
}

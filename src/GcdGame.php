<?php

namespace BrainGames\Cli;
function giveDescriptionsForGcd(): string
{
    return 'Find the greatest common divisor of given numbers.';

}

function giveArrayForGcd(): array
{
    $result=[];
    for($i=0; $i<3; $i++){
        foreach (getMaxRemains() as $key=>$value){
            $result[$key]=$value;
        }
    } return $result;
}

function getMaxRemains(): array // реализован алгоритм поиска Евклида
{

    $a = rand(0, 10000);
    $b = rand(0, 10000);
    $a > $b ? $max = $a : $max = $b;
    $a < $b ? $min = $a : $min = $b;
    $remains = 1;
    $result = [];
    $key = "{$a} {$b}";
    while ($remains != 0) {
        $remains = $max % $min;

        $max = $min;
        $min = $remains;
        if ($remains == 0) {
            break;
        }
    }
    $result[$key] = $max;
    return $result;
}




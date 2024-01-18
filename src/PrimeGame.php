<?php

namespace BrainGames\Cli;

function giveDescriptionsForPrime(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function getPrimeNumber(): array // получение массива простых чисел по методу Эратосфена
{
    $n = 100;// предел массива
    $arrOne = [];
    $result = [];
    $arrTwo = [];
    for ($i = 2; $i < $n; $i++) {
        $arrOne[] = $i;
    }
    $j = 0;
    while ($j < count($arrOne)) {
        $result[] = $arrOne[0];
        foreach ($arrOne as $value) {
            if ($value % ($arrOne[0]) != 0) {
                $arrTwo[] = $value;
            }
        }
        $arrOne = $arrTwo;
        $arrTwo = [];
    }
    return $result;
}

function getPrime(): array
{
    $a = rand(2, 100);
    $result = [];
    $primeNumber = getPrimeNumber();
    if (in_array($a, $primeNumber, false)) {
        $result[$a] = 'yes';
    } else {
        $result[$a] = 'no';
    }
    return $result;
}

function giveArrayForPrime(): array
{
    $result = [];
    while (count($result) < 3) {
        foreach (getPrime() as $key => $value) {
            $result[$key] = $value;
        }
    }
    return $result;
}

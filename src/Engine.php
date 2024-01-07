<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function sayName()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    return $name;

}

function getAnswer($task)
{
    line("Question: %d", $task);
    $answer = prompt('Your answer ');
    return $answer;
}

function getCorrect($name)
{
    line('Correct!');
    line('Congratulations, %s!', $name);
    return;
}

function getWrong($answer, $rightAnswer, $name)
{

    line("%s is wrong answer ;(.", $answer);
    line("Correct answer was %s", $rightAnswer);
    line("Let's try again, %s", $name);
    return;
}



<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

define('NUMBER_OF_QUSTIONS', 3);

function startEngineGame(string $description, array $answersQuestions)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    foreach ($answersQuestions as $key => $value) {
        line("Question: %s", $key);
        $answer = prompt('Your answer ');
        if ($answer != $value) {
            line("%s is wrong answer ;(.", $answer);
            line("Correct answer was %s", $value);
            line("Let's try again, %s!", $name);
            return;
        } else {
            line('Correct!');
        }
    }
    line('Congratulations, %s!', $name);
}

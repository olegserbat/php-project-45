<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function getDialogEngine(string $description, array $answersQuestions)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($description);
    $i = 0;
    foreach ($answersQuestions as $key => $value) {
        line("Question: %s", $key);
        $answer = prompt('Your answer ');
        if ($answer == $value) {
            line('Correct!');
            $i++;
            if ($i == 3) {
                line('Congratulations, %s!', $name);
                return;
            }
        } else {
            line("%s is wrong answer ;(.", $answer);
            line("Correct answer was %s", $value);
            line("Let's try again, %s!", $name);
            return;
        }

    }
}



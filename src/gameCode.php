<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function getDialog()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $i = 0;
    while ($i < 3) {
        $digit = rand();
        line("Question: %d", $digit);
        $answer = prompt('Your answer ');
        $digit%2==0 ? $rightAnswer='yes' : $rightAnswer='no';
        if ($answer==$rightAnswer) {
            line('Correct!');
            $i++;
            if ($i == 3) {
                line('Congratulations, %s!', $name);
                return;
            }
        } else {
                line("%s is wrong answer ;(.", $answer);
                line("Correct answer was %s",$rightAnswer);
                line("Let's try again, %s", $name);
                return;
            }

        }
    }


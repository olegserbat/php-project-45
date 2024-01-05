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
        if (($digit % 2 == 0 and $answer == 'yes') or ($digit % 2 != 0 and $answer == 'no')) {
            line('Correct!');
            $i++;
            if ($i == 3) {
                line('Congratulations, %s!', $name);
                return;
            }
        } else {
            if ($digit % 2 == 0 and $answer !== 'yes') {
                line("%s is wrong answer ;(. Correct answer was 'yes'.", $answer);
                line("Let's try again, %s", $name);
                return;
            }
            if ($digit % 2 != 0 and $answer !== 'no') {
                line("%s is wrong answer ;(. Correct answer was 'no'.", $answer);
                line("Let's try again, %s", $name);
                return;
            }
        }
    }
}

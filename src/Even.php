<?php

namespace Even\Cli;

use function cli\line;
use function cli\prompt;

function even()
{
    $correctAnswerCounter = 3;

    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    while ($correctAnswerCounter !== 0) {
        $randomNumber = mt_rand(1, 100);
        line('Question: ' . $randomNumber);
        $number = prompt('Your answer ');
        if ($randomNumber % 2 === 0 && $number == 'yes') {
            line('Correct!');
            $correctAnswerCounter -= 1;
        } elseif ($randomNumber % 2 !== 0 && $number == 'no') {
            line('Correct!');
            $correctAnswerCounter -= 1;
        } else {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, %s!", $name);
            $correctAnswerCounter = 3;
        }
    }
    line("Congratulations, %s!", $name);
}

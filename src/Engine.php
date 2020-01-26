<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNTER = 3;

function engine($gameTask, $gameDates)
{
    line('Welcome to the Brain Game!');
    line($gameTask);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    foreach ($gameDates as $questions => $correctAnswers) {
        line("Question: {$questions}");
        $gamerAnswer = prompt('Your answer ');
        if ($gamerAnswer !== $correctAnswers) {
            line("'{$gamerAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswers}'.");
            line("Let's try again, %s!", $name);
            return false;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}

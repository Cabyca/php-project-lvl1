<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const COUNTER = 3;

function engine($questionGames, $questions, $correctAnswer)
{
    line('Welcome to the Brain Game!');
    line($questionGames);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($i = 0; $i < COUNTER; $i += 1) {
        line("Question: {$questions[$i]}");
        $answerGamer = prompt('Your answer ');
        if ($correctAnswer[$i] !== $answerGamer) {
            line("'{$answerGamer}' is wrong answer ;(. Correct answer was '{$correctAnswer[$i]}'.");
            line("Let's try again, %s!", $name);
            return false;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}

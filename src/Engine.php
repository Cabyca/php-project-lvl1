<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const COUNTER = 3;

function engine($questionGame, $questions, $correctAnswers)
{
    line('Welcome to the Brain Game!');
    line($questionGame);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($i = 0; $i < COUNTER; $i += 1) {
        $answer = $correctAnswers[$i];
        line("Question: {$questions[$i]}");
        $answerGamer = prompt('Your answer ');
        if ($answer !== $answerGamer) {
            line("'{$answerGamer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, %s!", $name);
            return false;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}

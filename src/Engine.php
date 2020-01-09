<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const COUNT_GAME = 3;

function check($questionGames, $textQuestion, $textCorrectAnswer)
{
    line('Welcome to the Brain Game!');
    line($questionGames);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    
    for ($i = 0; $i < COUNT_GAME; $i += 1) {
        line("Question: {$textQuestion[$i]}");
        $answerGamer = prompt('Your answer ');
        if ($textCorrectAnswer[$i] === (string) $answerGamer) {
            line('Correct!');
        } elseif ($textCorrectAnswer[$i] !== (string) $answerGamer) {
            line("'{$answerGamer}' is wrong answer ;(. Correct answer was '{$textCorrectAnswer[$i]}'.");
            line("Let's try again, %s!", $name);
            return false;
        }
    }
    line("Congratulations, %s!", $name);
}

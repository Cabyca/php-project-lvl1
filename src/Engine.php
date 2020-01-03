<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const COUNT_ANSWER = 3;

function gameselection($questionGames)
{
    line('Welcome to the Brain Game!');

    line($questionGames);

    return true;
}

function check($textQuestion, $textCorrectAnswer)
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    
    line('Question: ' . $textQuestion);
    $answerGamer = prompt('Your answer ');

    if ($textCorrectAnswer === (string) $answerGamer) {
        line('Correct!');
        return true;
    } elseif ($textCorrectAnswer !== (string) $answerGamer) {
        line("'{$answerGamer}' is wrong answer ;(. Correct answer was '{$textCorrectAnswer}'.");
        line("Let's try again, %s!", $name);
        return false;
    }
}

function gameOver($name)
{
    line("Congratulations, %s!", $name);
}
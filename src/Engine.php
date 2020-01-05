<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const COUNT_ANSWER = 3;

$name = '';

function greeting($questionGames)
{
    line('Welcome to the Brain Game!');
    line($questionGames);
    global $name;
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function check($textQuestion, $textCorrectAnswer)
{
    line("Question: {$textQuestion}");
    $answerGamer = prompt('Your answer ');
    if ($textCorrectAnswer === (string) $answerGamer) {
        line('Correct!');
        return true;
    } elseif ($textCorrectAnswer !== (string) $answerGamer) {
        global $name;
        line("'{$answerGamer}' is wrong answer ;(. Correct answer was '{$textCorrectAnswer}'.");
        line("Let's try again, %s!", $name);
        return false;
    }
}

function gameOver()
{
    global $name;
    line("Congratulations, %s!", $name);
}

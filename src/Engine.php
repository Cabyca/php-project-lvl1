<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Even\even;
use function BrainGames\Calc\calc;
use function BrainGames\Gcd\gcd;

function gameselection($nameGame)
{
    line('Welcome to the Brain Game!');
    switch ($nameGame) {
        case "even":
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case "calc":
            line('What is the result of the expression?');
            break;
        case "gcd":
            line('Find the greatest common divisor of given numbers.');
            break;
        default:
            true;
    }

    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $counterCorrectAnswer = 3;
    while ($counterCorrectAnswer !== 0) {
        $textQuestion = '';
        $textCorrectAnswer = '';

        switch ($nameGame) {
            case "even":
                list ($textQuestion, $textCorrectAnswer) = even();
                break;
            case "calc":
                list ($textQuestion, $textCorrectAnswer) = calc();
                break;
            case "gcd":
                list ($textQuestion, $textCorrectAnswer) = gcd();
                break;
            default:
                true;
        }

        line('Question: ' . $textQuestion);
        $answerGamer = prompt('Your answer ');

        if ($textCorrectAnswer === (string) $answerGamer) {
            line('Correct!');
            $counterCorrectAnswer -= 1;
        } elseif ($textCorrectAnswer !== (string) $answerGamer) {
            line("'{$answerGamer}' is wrong answer ;(. Correct answer was '{$textCorrectAnswer}'.");
            line("Let's try again, %s!", $name);
            $counterCorrectAnswer = 3;
        }
    }
    line("Congratulations, %s!", $name);
}

<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Even\evenGame;
use function BrainGames\Calc\calcGame;
use function BrainGames\Gcd\gcdGame;
use function BrainGames\Progression\progressionGame;
use function BrainGames\Prime\primeGame;

function gameselection($nameGames, $questionGames)
{
    line('Welcome to the Brain Game!');

    line($questionGames);

    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $counterCorrectAnswer = 3;

    $textQuestion = '';
    $textCorrectAnswer = '';
    
    while ($counterCorrectAnswer !== 0) {
        
        switch ($nameGames) {
            case "even":
                list($textQuestion, $textCorrectAnswer) = evenGame();
                break;
            case "calc":
                list ($textQuestion, $textCorrectAnswer) = calcGame();
                break;
            case "gcd":
                list($textQuestion, $textCorrectAnswer) = gcdGame();
                break;
            case "progression":
                list($textQuestion, $textCorrectAnswer) = progressionGame();
                break;
            case "prime":
                list($textQuestion, $textCorrectAnswer) = primeGame();
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

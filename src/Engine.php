<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

use function BrainGames\Calc\check;
use function BrainGames\Progression\check;

const COUNT_ANSWER = 3;

function gameselection($questionGames)
{
    line('Welcome to the Brain Game!');

    line($questionGames);

    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $countGame = 0;

    while ($countGame !== COUNT_ANSWER) {

        $textQuestion = '';
        $textCorrectAnswer = '';

        if ($countGame < COUNT_ANSWER) {
            list ($textQuestion, $textCorrectAnswer) = check();
            
            line("Question: {$textQuestion}");
            $answerGamer = prompt('Your answer ');

            if ($textCorrectAnswer === (string) $answerGamer) {
                line('Correct!');
                $countGame += 1;
            } elseif ($textCorrectAnswer !== (string) $answerGamer) {
                line("{$answerGamer} is wrong answer ;(. Correct answer was {$textCorrectAnswer}.");
                line("Let's try again, %s!", $name);
                $countGame = 0;
            }
        }
    }
    line("Congratulations, %s!", $name);
}

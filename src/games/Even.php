<?php

namespace BrainGames\Even;

use function BrainGames\Engine\greeting;
use function BrainGames\Engine\check;
use function BrainGames\Engine\gameOver;

use const BrainGames\Engine\COUNT_ANSWER;

const MIN_VALUE = 1;
const MAX_VALUE = 100;

function even()
{
    $questionGames = 'Answer "yes" if the number is even, otherwise answer "no".';
    greeting($questionGames);

    $countGame = 0;

    while ($countGame !== COUNT_ANSWER) {
        $textQuestion = '';
        $textCorrectAnswer = '';
    
        $randomValue = mt_rand(MIN_VALUE, MAX_VALUE);

        if (isEven($randomValue)) {
            $textCorrectAnswer = 'yes';
        } else {
            $textCorrectAnswer = 'no';
        }
        
        $textQuestion = (string) $randomValue;

        if (check($textQuestion, $textCorrectAnswer)) {
            $countGame += 1;
        } else {
            $countGame = 0;
        }
    }
    gameOver();
}

function isEven($randomValue)
{
    return $randomValue % 2 === 0;
}

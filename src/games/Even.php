<?php

namespace BrainGames\Even;

use function BrainGames\Engine\check;

use const BrainGames\Engine\COUNT_GAME;

const MIN_VALUE = 1;
const MAX_VALUE = 100;

function even()
{
    $questionGames = 'Answer "yes" if the number is even, otherwise answer "no".';
    
    $countGame = 0;
    $textQuestion = [];
    $textCorrectAnswer = [];

    while ($countGame !== COUNT_GAME) {
        $randomValue = mt_rand(MIN_VALUE, MAX_VALUE);

        if (isEven($randomValue)) {
            $textCorrectAnswer[$countGame] = 'yes';
        } else {
            $textCorrectAnswer[$countGame] = 'no';
        }
        
        $textQuestion[$countGame] = (string) $randomValue;
        $countGame += 1;
    }

    check($questionGames, $textQuestion, $textCorrectAnswer);
}

function isEven($randomValue)
{
    return $randomValue % 2 === 0;
}

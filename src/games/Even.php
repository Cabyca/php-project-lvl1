<?php

namespace BrainGames\Even;

use function BrainGames\Engine\gameselection;

function even()
{
    $nameGames = 'even';
    $questionGames = 'Answer "yes" if the number is even, otherwise answer "no".';
    gameselection($nameGames, $questionGames);
}

function evenGame()
{
    $randomValue = mt_rand(1, 100);

    if (isEven($randomValue)) {
            $textCorrectAnswer = 'yes';
    } else {
        $textCorrectAnswer = 'no';
    }
        
    $textQuestion = (string) $randomValue;

    
    return array ($textQuestion, $textCorrectAnswer);
}

function isEven($randomValue)
{
    return $randomValue % 2 === 0;
}

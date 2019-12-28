<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\gameselection;

function prime()
{
    $nameGames = 'prime';
    $questionGames = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    gameselection($nameGames, $questionGames);
}

function primeGame()
{
    $randomValue = mt_rand(1, 100);

    $textQuestion = (string) $randomValue;

    if (isPrime($randomValue)) {
        $textCorrectAnswer = 'yes';
    } else {
        $textCorrectAnswer = 'no';
    }
    
    return array($textQuestion, $textCorrectAnswer);
}

function isPrime($randomValue)
{
    $sqrtRandomValue = sqrt($randomValue);

    for ($i = 2; $i <= $sqrtRandomValue; $i += 1) {
        if ($randomValue % $i === 0) {
            return false;
        }
    }
    return true;
}

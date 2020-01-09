<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\check;

use const BrainGames\Engine\COUNT_GAME;

const MIN_VALUE = 2;
const MAX_VALUE = 100;

function prime()
{
    $questionGames = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    
    $countGame = 0;
    $textQuestion = [];
    $textCorrectAnswer = [];

    while ($countGame !== COUNT_GAME) {
        $randomValue = mt_rand(MIN_VALUE, MAX_VALUE);

        $textQuestion[$countGame] = (string) $randomValue;

        if (isPrime($randomValue)) {
            $textCorrectAnswer[$countGame] = 'yes';
        } else {
            $textCorrectAnswer[$countGame] = 'no';
        }
        $countGame += 1;

    }

    check($questionGames, $textQuestion, $textCorrectAnswer);
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

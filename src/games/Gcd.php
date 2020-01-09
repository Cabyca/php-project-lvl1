<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\check;

use const BrainGames\Engine\COUNT_GAME;

const MIN_VALUE = 1;
const MAX_VALUE = 25;

function gcd()
{
    $questionGames = 'Find the greatest common divisor of given numbers.';
    
    $countGame = 0;
    $textQuestion = [];
    $textCorrectAnswer = [];

    while ($countGame !== COUNT_GAME) {
        $randomValue1 = mt_rand(MIN_VALUE, MAX_VALUE);
        $randomValue2 = mt_rand(MIN_VALUE, MAX_VALUE);    
        $minNumber = min($randomValue1, $randomValue2);

        $textQuestion[$countGame] = "{$randomValue1}  {$randomValue2}";
        $textCorrectAnswer[$countGame] = leastDivisorSearch($minNumber, $randomValue1, $randomValue2);
        $countGame += 1;
    }

    check($questionGames, $textQuestion, $textCorrectAnswer);
}

function leastDivisorSearch($minNumber, $randomValue1, $randomValue2)
{
    $greatestDivisor = 0;

    while (true) {    
        if ($randomValue1 % $minNumber === 0 && $randomValue2 % $minNumber === 0) {
            $greatestDivisor = (string) $minNumber;
            return $greatestDivisor;
        }
        $minNumber -= 1;
    }
}

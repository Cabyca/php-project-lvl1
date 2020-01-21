<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\COUNTER;

const MIN_VALUE = 1;
const MAX_VALUE = 25;

function gcd()
{
    $questionGame = 'Find the greatest common divisor of given numbers.';
    
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < COUNTER; $i += 1) {
        $randomValue1 = mt_rand(MIN_VALUE, MAX_VALUE);
        $randomValue2 = mt_rand(MIN_VALUE, MAX_VALUE);
        $minNumber = min($randomValue1, $randomValue2);
        $questions[$i] = "{$randomValue1}  {$randomValue2}";
        $correctAnswers[$i] = findTheGreatestDivisor($minNumber, $randomValue1, $randomValue2);
    }
    engine($questionGame, $questions, $correctAnswers);
}

function findTheGreatestDivisor($minNumber, $randomValue1, $randomValue2)
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

<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNTER;

const MIN_VALUE = 1;
const MAX_VALUE = 25;

function gcd()
{
    $gameTask = 'Find the greatest common divisor of given numbers.';
    
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNTER; $i += 1) {
        $randomValue1 = mt_rand(MIN_VALUE, MAX_VALUE);
        $randomValue2 = mt_rand(MIN_VALUE, MAX_VALUE);
        $questions = "{$randomValue1}  {$randomValue2}";
        $correctAnswers = findTheGreatestDivisor($randomValue1, $randomValue2);
        $gameData[$questions] = $correctAnswers;
    }
    engine($gameTask, $gameData);
}

function findTheGreatestDivisor($randomValue1, $randomValue2)
{
    $minNumber = min($randomValue1, $randomValue2);
    $greatestDivisor = 0;
    while (true) {
        if ($randomValue1 % $minNumber === 0 && $randomValue2 % $minNumber === 0) {
            $greatestDivisor = (string) $minNumber;
            return $greatestDivisor;
        }
        $minNumber -= 1;
    }
}

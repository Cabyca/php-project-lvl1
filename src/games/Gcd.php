<?php

namespace BrainGames\Gcd;

function gcd()
{
    $randomValue1 = mt_rand(1, 25);
    $randomValue2 = mt_rand(1, 25);
    
    $minNumber = min ($randomValue1, $randomValue2);

    while (true) {
        if ($randomValue1 % $minNumber === 0 && $randomValue2 % $minNumber === 0) {
            $greatestDivisor = $minNumber;
            break;
        }
        $minNumber -= 1;
    }

    $textQuestion = (string) $randomValue1 . "  " . (string) $randomValue2;
    $textCorrectAnswer = (string) $greatestDivisor;
        
    return array($textQuestion, $textCorrectAnswer);
}

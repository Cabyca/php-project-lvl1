<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\gameselection;

function gcd()
{
    $nameGames = 'gcd';
    $questionGames = 'Find the greatest common divisor of given numbers.';
    gameselection($nameGames, $questionGames);
}

function gcdGame()
{
    $randomValue1 = mt_rand(1, 25);
    $randomValue2 = mt_rand(1, 25);
    
    $minNumber = min($randomValue1, $randomValue2);

    while (true) {
        if ($randomValue1 % $minNumber === 0 && $randomValue2 % $minNumber === 0) {
            $greatestDivisor = $minNumber;
            break;
        }
        $minNumber -= 1;
    }
    
    $textQuestion = "{$randomValue1}  {$randomValue2}";
    $textCorrectAnswer = (string) $greatestDivisor;
        
    return array($textQuestion, $textCorrectAnswer);
}

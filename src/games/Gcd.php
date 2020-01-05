<?php

namespace BrainGames\Gcd;

use const BrainGames\Engine\COUNT_ANSWER;

use function BrainGames\Engine\greeting;
use function BrainGames\Engine\check;
use function BrainGames\Engine\gameOver;

const MIN_VALUE = 1;
const MAX_VALUE = 25;

function gcd()
{
    $questionGames = 'Find the greatest common divisor of given numbers.';
    greeting($questionGames);

    $countGame = 0;

    while ($countGame !== COUNT_ANSWER) {
    
        $textQuestion = '';
        $textCorrectAnswer = '';

        $randomValue1 = mt_rand(MIN_VALUE, MAX_VALUE);
        $randomValue2 = mt_rand(MIN_VALUE, MAX_VALUE);
    
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

        if (check($textQuestion, $textCorrectAnswer)) {
            $countGame += 1;
        } else {
            $countGame = 0;
        }
    }
    gameOver();
}

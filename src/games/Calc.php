<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNTER;

const SINGS = array('+', '-', '*');
const MIN_VALUE = 1;
const MAX_VALUE = 25;

function calc()
{
    $gameTask = 'What is the result of the expression?';
    
    $gameDates = [];

    for ($i = 0; $i < ROUNDS_COUNTER; $i += 1) {
        $randomOperator = SINGS[array_rand(SINGS, 1)];
        $randomValue1 = mt_rand(MIN_VALUE, MAX_VALUE);
        $randomValue2 = mt_rand(MIN_VALUE, MAX_VALUE);
        switch ($randomOperator) {
            case "-":
                $result = $randomValue1 - $randomValue2;
                break;
            case "+":
                $result = $randomValue1 + $randomValue2;
                break;
            case "*":
                $result = $randomValue1 * $randomValue2;
                break;
            default:
                false;
        }
        $questions = "{$randomValue1} {$randomOperator} {$randomValue2}";
        $correctAnswers = (string) $result;
        $gameDates[$questions] = $correctAnswers;
    }
    engine($gameTask, $gameDates);
}

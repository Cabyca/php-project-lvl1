<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\check;

use const BrainGames\Engine\COUNT_GAME;

const SINGS = array('+', '-', '*');
const MIN_VALUE = 1;
const MAX_VALUE = 25;

function calc()
{
    $questionGames = 'What is the result of the expression?';
    
    $countGame = 0;
    $textQuestion = [];
    $textCorrectAnswer = [];

    while ($countGame !== COUNT_GAME) {
        $randomOperator = SINGS[array_rand(SINGS, 1)];
        $randomValue1 = mt_rand(MIN_VALUE, MAX_VALUE);
        $randomValue2 = mt_rand(MIN_VALUE, MAX_VALUE);
    
        switch ($randomOperator) {
            case "-":
                $result = $randomValue1 - $randomValue2;
                $textCorrectAnswer[$countGame] = (string) $result;
                break;
            case "+":
                $result = $randomValue1 + $randomValue2;
                $textCorrectAnswer[$countGame] = (string) $result;
                break;
            case "*":
                $result = $randomValue1 * $randomValue2;
                $textCorrectAnswer[$countGame] = (string) $result;
                break;
            default:
                true;
        }
        $textQuestion[$countGame] = "{$randomValue1} {$randomOperator} {$randomValue2}";
        $countGame += 1;
    }
    
    check($questionGames, $textQuestion, $textCorrectAnswer);
}

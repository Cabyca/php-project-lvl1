<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\gameselection;

function calc()
{
    $questionGames = 'What is the result of the expression?';
    gameselection($questionGames);
}

const SINGS = array('+', '-', '*');
    
function check()
{
    $randomOperator = SINGS[array_rand(SINGS, 1)];
    $randomValue1 = mt_rand(1, 25);
    $randomValue2 = mt_rand(1, 25);
    
    switch ($randomOperator) {
        case "-":
            $result = $randomValue1 - $randomValue2;
            $textCorrectAnswer = (string) $result;
            break;
        case "+":
            $result = $randomValue1 + $randomValue2;
            $textCorrectAnswer = (string) $result;
            break;
        case "*":
            $result = $randomValue1 * $randomValue2;
            $textCorrectAnswer = (string) $result;
            break;
        default:
            true;
    }

    $textQuestion = "{$randomValue1} {$randomOperator} {$randomValue2}";

    return array($textQuestion, $textCorrectAnswer);
}

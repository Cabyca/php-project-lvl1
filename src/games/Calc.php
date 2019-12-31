<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\gameselection;

function calc()
{
    $nameGames = 'calc';
    $questionGames = 'What is the result of the expression?';
    gameselection($nameGames, $questionGames);
}

const SINGS = array('+', '-', '*');

function calcGame()
{
    $rand_keys = array_rand(SINGS, 1);
    $randomOperator = SINGS[$rand_keys];
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

    $textQuestion = (string) ("{$randomValue1} {$randomOperator} {$randomValue2}");

    return array ($textQuestion, $textCorrectAnswer);
}

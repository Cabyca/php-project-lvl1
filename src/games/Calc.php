<?php

namespace BrainGames\Calc;

function calc()
{
    $arrayOperators = ['-', '+', '*'];
    $rand_keys = array_rand($arrayOperators, 1);
    $randomOperator = $arrayOperators[$rand_keys];
    $randomValue1 = mt_rand(1, 25);
    $randomValue2 = mt_rand(1, 25);
    
    switch ($randomOperator) {
        case "-":
            $result = $randomValue1 - $randomValue2;
            $textQuestion = (string) $randomValue1 . "-" . (string) $randomValue2;
            $textCorrectAnswer = (string) $result;
            break;
        case "+":
            $result = $randomValue1 + $randomValue2;
            $textQuestion = (string) $randomValue1 . "+" . (string) $randomValue2;
            $textCorrectAnswer = (string) $result;
            break;
        case "*":
            $result = $randomValue1 * $randomValue2;
            $textQuestion = (string) $randomValue1 . "*" . (string) $randomValue2;
            $textCorrectAnswer = (string) $result;
            break;
        default: 
            true;
    }
    return array ($textQuestion, $textCorrectAnswer);
}

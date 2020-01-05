<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\greeting;
use function BrainGames\Engine\check;
use function BrainGames\Engine\gameOver;

use const BrainGames\Engine\COUNT_ANSWER;

const SINGS = array('+', '-', '*');
const MIN_VALUE = 1;
const MAX_VALUE = 25;

function calc()
{
    $questionGames = 'What is the result of the expression?';
    greeting($questionGames);

    $countGame = 0;

    while ($countGame !== COUNT_ANSWER) {
        $textQuestion = '';
        $textCorrectAnswer = '';
            
        $randomOperator = SINGS[array_rand(SINGS, 1)];
        $randomValue1 = mt_rand(MIN_VALUE, MAX_VALUE);
        $randomValue2 = mt_rand(MIN_VALUE, MAX_VALUE);
    
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

        if (check($textQuestion, $textCorrectAnswer)) {
            $countGame += 1;
        } else {
            $countGame = 0;
        }
    }
    gameOver();
}

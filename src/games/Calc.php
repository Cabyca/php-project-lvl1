<?php

namespace BrainGames\Calc;

use const BrainGames\Engine\COUNT_ANSWER;

use function BrainGames\Engine\check;
use function BrainGames\Engine\gameselection;
use function BrainGames\Engine\gameOver;

const SINGS = array('+', '-', '*');

function calc()
{

    $name = '';

    $questionGames = 'What is the result of the expression?';
    gameselection($questionGames);
    
    $countGame = 0;

    while ($countGame !== COUNT_ANSWER) {
    
            $textQuestion = '';
            $textCorrectAnswer = '';

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

            if (check($textQuestion, $textCorrectAnswer)) {
                $countGame += 1;
            } else {
                $countGame = 0;
            }
    }
    gameOver($name);
}

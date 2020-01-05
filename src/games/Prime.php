<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\greeting;
use function BrainGames\Engine\check;
use function BrainGames\Engine\gameOver;

use const BrainGames\Engine\COUNT_ANSWER;

const MIN_VALUE = 1;
const MAX_VALUE = 100;

function prime()
{
    $questionGames = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    greeting($questionGames);

    $countGame = 0;

    while ($countGame !== COUNT_ANSWER) {
        $textQuestion = '';
        $textCorrectAnswer = '';

        $randomValue = mt_rand(MIN_VALUE, MAX_VALUE);

        $textQuestion = (string) $randomValue;

        if (isPrime($randomValue)) {
            $textCorrectAnswer = 'yes';
        } else {
            $textCorrectAnswer = 'no';
        }

        if (check($textQuestion, $textCorrectAnswer)) {
            $countGame += 1;
        } else {
            $countGame = 0;
        }
    }
    gameOver();
}

function isPrime($randomValue)
{
    $sqrtRandomValue = sqrt($randomValue);

    for ($i = 2; $i <= $sqrtRandomValue; $i += 1) {
        if ($randomValue % $i === 0) {
            return false;
        }
    }
    return true;
}

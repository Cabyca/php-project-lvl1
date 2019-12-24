<?php

namespace BrainGames\Prime;

function prime()
{
    $randomValue = mt_rand(1, 100);

    $textQuestion = (string) $randomValue;

    $textCorrectAnswer = 'yes';

    $sqrtRandomValue = sqrt($randomValue);

    for ($i = 2; $i <= $sqrtRandomValue; $i += 1) {
        if ($randomValue % $i === 0) {
            $textCorrectAnswer = 'no';
        }
    }

    return array($textQuestion, $textCorrectAnswer);
}

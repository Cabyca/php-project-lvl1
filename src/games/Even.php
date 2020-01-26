<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNTER;

const MIN_VALUE = 1;
const MAX_VALUE = 100;

function even()
{
    $gameTask = 'Answer "yes" if the number is even, otherwise answer "no".';
    
    $gameDates = [];

    for ($i = 0; $i < ROUNDS_COUNTER; $i += 1) {
        $questions = (string) mt_rand(MIN_VALUE, MAX_VALUE);
        $correctAnswers = isEven($questions) ? 'yes' : 'no';
        $gameDates[$questions] = $correctAnswers;
    }
    engine($gameTask, $gameDates);
}

function isEven($questions)
{
    return $questions % 2 === 0;
}

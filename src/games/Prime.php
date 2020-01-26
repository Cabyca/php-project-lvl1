<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNTER;

const MIN_VALUE = -10;
const MAX_VALUE = 100;

function prime()
{
    $gameTask = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    
    $gameDates = [];

    for ($i = 0; $i < ROUNDS_COUNTER; $i += 1) {
        $questions = (string) mt_rand(MIN_VALUE, MAX_VALUE);
        $correctAnswers = isSimple($questions) ? 'yes' : 'no';
        $gameDates[$questions] = $correctAnswers;
    }
    engine($gameTask, $gameDates);
}

function isSimple($questions)
{
    if ($questions < 2) {
        return false;
    }

    $sqrtValue = sqrt($questions);

    for ($i = 2; $i <= $sqrtValue; $i += 1) {
        if ($questions % $i === 0) {
            return false;
        }
    }
    return true;
}

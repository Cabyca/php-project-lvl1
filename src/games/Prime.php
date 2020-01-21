<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\COUNTER;

const MIN_VALUE = -10;
const MAX_VALUE = 100;

function prime()
{
    $questionGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < COUNTER; $i += 1) {
        $questions[$i] = (string) mt_rand(MIN_VALUE, MAX_VALUE);

        $correctAnswers[$i] = isSimple($questions[$i]) ? 'yes' : 'no';
    }
    engine($questionGame, $questions, $correctAnswers);
}

function isSimple($questions)
{
    if ($questions < 2) {
        return false;
    }

    $sqrtRandomValue = sqrt($questions);

    for ($i = 2; $i <= $sqrtRandomValue; $i += 1) {
        if ($questions % $i === 0) {
            return false;
        }
    }
    return true;
}

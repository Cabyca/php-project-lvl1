<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\COUNTER;

const MIN_VALUE = 2;
const MAX_VALUE = 100;

function prime()
{
    $questionGames = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    
    $questions = [];
    $correctAnswer = [];

    for ($i = 0; $i < COUNTER; $i += 1) {
        $questions[$i] = (string) mt_rand(MIN_VALUE, MAX_VALUE);

        $correctAnswer[$i] = isSimpleOrNotNumber($questions[$i]) ? 'yes' : 'no';
    }
    engine($questionGames, $questions, $correctAnswer);
}

function isSimpleOrNotNumber($questions)
{
    $sqrtRandomValue = sqrt($questions);

    for ($i = 2; $i <= $sqrtRandomValue; $i += 1) {
        if ($questions % $i === 0) {
            return false;
        }
    }
    return true;
}

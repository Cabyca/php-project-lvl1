<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\COUNTER;

const MIN_VALUE = 1;
const MAX_VALUE = 100;

function even()
{
    $questionGame = 'Answer "yes" if the number is even, otherwise answer "no".';
    
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < COUNTER; $i += 1) {
        $questions[$i] = (string) mt_rand(MIN_VALUE, MAX_VALUE);

        $correctAnswers[$i] = isEven($questions[$i]) ? 'yes' : 'no';
    }
    engine($questionGame, $questions, $correctAnswers);
}

function isEven($questions)
{
    return $questions % 2 === 0;
}

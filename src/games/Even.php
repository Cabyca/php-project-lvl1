<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\COUNTER;

const MIN_VALUE = 1;
const MAX_VALUE = 100;

function even()
{
    $questionGames = 'Answer "yes" if the number is even, otherwise answer "no".';
    
    $questions = [];
    $correctAnswer = [];

    for ($i = 0; $i < COUNTER; $i += 1) {
        $questions[$i] = (string) mt_rand(MIN_VALUE, MAX_VALUE);

        $correctAnswer[$i] = isEvenOrOdd($questions[$i]) ? 'yes' : 'no';
    }

    engine($questionGames, $questions, $correctAnswer);
}

function isEvenOrOdd($questions)
{
    return $questions % 2 === 0;
}

<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\COUNTER;

const LENGHT_PROGRESSION = 10;
const STEP = 10;
const MIN_VALUE = 1;
const MAX_VALUE = 10;

function progression()
{
    $questionGame = 'What number is missing in the progression?';
    
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < COUNTER; $i += 1) {
        $firstDigitOfProgression = mt_rand(MIN_VALUE, MAX_VALUE);
        $progressionStep = mt_rand(1, STEP);
        $hiddenNumberIndex = mt_rand(0, LENGHT_PROGRESSION - 1);
        
        for ($j = 0; $j < LENGHT_PROGRESSION; $j += 1) {
            $progressionArray[$j] = $firstDigitOfProgression + $progressionStep * $j;
        }
        
        $correctAnswers[$i] = (string) $progressionArray[$hiddenNumberIndex];

        $progressionArray[$hiddenNumberIndex] = '..';
        $questions[$i] = implode($progressionArray, ' ');
    }
    engine($questionGame, $questions, $correctAnswers);
}

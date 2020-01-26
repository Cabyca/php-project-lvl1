<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNTER;

const LENGHT_PROGRESSION = 10;
const STEP = 10;
const MIN_VALUE = 1;
const MAX_VALUE = 10;

function progression()
{
    $gameTask = 'What number is missing in the progression?';
    
    $gameDates = [];

    for ($i = 0; $i < ROUNDS_COUNTER; $i += 1) {
        $firstDigitOfProgression = mt_rand(MIN_VALUE, MAX_VALUE);
        $progressionStep = mt_rand(1, STEP);
        $hiddenNumberIndex = mt_rand(0, LENGHT_PROGRESSION - 1);
        
        for ($j = 0; $j < LENGHT_PROGRESSION; $j += 1) {
            $progressions[$j] = $firstDigitOfProgression + $progressionStep * $j;
        }
        
        $correctAnswers = (string) $progressions[$hiddenNumberIndex];
        $progressions[$hiddenNumberIndex] = '..';
        $questions = implode($progressions, ' ');
        $gameDates[$questions] = $correctAnswers;
    }
    engine($gameTask, $gameDates);
}

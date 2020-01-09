<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\check;

use const BrainGames\Engine\COUNT_GAME;

const LENGHT_PROGRESSION = 10;
const STEP = 10;
const MIN_VALUE = 1;
const MAX_VALUE = 10;

function progression()
{
    $questionGames = 'What number is missing in the progression?';
    
    $countGame = 0;
    $textQuestion = [];
    $textCorrectAnswer = [];

    while ($countGame !== COUNT_GAME) {
        $firstDigitOfProgression = mt_rand(MIN_VALUE, MAX_VALUE);
        $progressionStep = mt_rand(1, STEP);        
        $indexNumber = mt_rand(0, LENGHT_PROGRESSION - 1);

        for ($i = 0; $i < LENGHT_PROGRESSION; $i += 1) {
            $progressionArray[$i] = $firstDigitOfProgression + $progressionStep * $i;
        }
    
        $textCorrectAnswer[$countGame] = (string) $progressionArray[$indexNumber];

        $progressionArray[$indexNumber] = '..';
        $textQuestion[$countGame] = implode($progressionArray, ' ');
        $countGame += 1;
    }

    check($questionGames, $textQuestion, $textCorrectAnswer);
}

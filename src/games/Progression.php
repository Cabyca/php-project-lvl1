<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\gameselection;

function progression()
{
    //$nameGames = 'progression';
    $questionGames = 'What number is missing in the progression?';
    gameselection($questionGames);
}

const LENGHT_PROGRESSION = 10;
const STEP = 10;

function progressionGame()
{
    $firstDigitOfProgression = mt_rand(1, 10);
    $progressionArray[0] = $firstDigitOfProgression;
    
    $progressionStep = mt_rand(1, STEP);
    
    $indexNumber = mt_rand(0, LENGHT_PROGRESSION - 1);

    for ($i = 1; $i < LENGHT_PROGRESSION; $i += 1) {
        $progressionArray[$i] = $progressionArray[$i - 1] + $progressionStep;
    }
   
    $textCorrectAnswer = (string) $progressionArray[$indexNumber];

    $progressionArray[$indexNumber] = '..';
    $textQuestion = implode($progressionArray, ' ');
    
    return array($textQuestion, $textCorrectAnswer);
}

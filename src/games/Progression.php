<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\gameselection;

function progression()
{
    $nameGames = 'progression';
    $questionGames = 'What number is missing in the progression?';
    gameselection($nameGames, $questionGames);
}

function progressionGame()
{
    $firstDigitOfProgression = mt_rand(1, 10);
    $progressionArray[0] = $firstDigitOfProgression;
    
    $progressionStep = mt_rand(1, 10);
    
    $indexNumber = mt_rand(0, 9);

    $lenghtProgression = 10;
    
    for ($i = 1; $i < $lenghtProgression; $i += 1) {
        $progressionArray[$i] = $progressionArray[$i - 1] + $progressionStep;
    }
   
    $textCorrectAnswer = (string) $progressionArray[$indexNumber];

    $progressionArray[$indexNumber] = '..';
    $textQuestion = implode($progressionArray, ' ');
    
    return array($textQuestion, $textCorrectAnswer);
}

<?php

namespace BrainGames\Progression;

function progression()
{
    $firstDigitOfProgression = mt_rand(1, 10);    
    $progressionArray[0] = $firstDigitOfProgression;
    
    $progressionStep = mt_rand(1, 10);
    
    $indexNumber = mt_rand(0, 9);
    
    for ($i = 1; $i < 10; $i += 1) {
        $progressionArray[$i] = $progressionArray[$i -1] + $progressionStep;
        
    }
   
    $textCorrectAnswer = (string) $progressionArray[$indexNumber];

    $progressionArray[$indexNumber] = '..';
    $textQuestion = implode($progressionArray, ' ');
    
    return array($textQuestion, $textCorrectAnswer);
}

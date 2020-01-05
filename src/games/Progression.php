<?php

namespace BrainGames\Progression;

use const BrainGames\Engine\COUNT_ANSWER;

use function BrainGames\Engine\greeting;
use function BrainGames\Engine\check;
use function BrainGames\Engine\gameOver;

const LENGHT_PROGRESSION = 10;
const STEP = 10;
const MIN_VALUE = 1;
const MAX_VALUE = 10;

function progression()
{
    $questionGames = 'What number is missing in the progression?';
    greeting($questionGames);

    $countGame = 0;

    while ($countGame !== COUNT_ANSWER) {

        $textQuestion = '';
        $textCorrectAnswer = '';

        $firstDigitOfProgression = mt_rand(MIN_VALUE, MAX_VALUE);
        $progressionArray[0] = $firstDigitOfProgression;
        
        $progressionStep = mt_rand(1, STEP);
        
        $indexNumber = mt_rand(0, LENGHT_PROGRESSION - 1);

        for ($i = 1; $i < LENGHT_PROGRESSION; $i += 1) {
            $progressionArray[$i] = $progressionArray[$i - 1] + $progressionStep;
        }
    
        $textCorrectAnswer = (string) $progressionArray[$indexNumber];

        $progressionArray[$indexNumber] = '..';
        $textQuestion = implode($progressionArray, ' ');

        if (check($textQuestion, $textCorrectAnswer)) {
            $countGame += 1;
        } else {
            $countGame = 0;
        }
    }
    gameOver();
}

<?php

namespace BrainGames\Even;

function even()
{   
    $randomValue = mt_rand(1, 100);

    $textQuestion = (string) $randomValue;
    
    if ($randomValue % 2 === 0) {
        $textCorrectAnswer = (string)'yes';
    } elseif ($randomValue % 2 !== 0) {
        $textCorrectAnswer = (string)'no';
    }
    
    return array ($textQuestion, $textCorrectAnswer);
}

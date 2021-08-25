<?php

namespace  Php\Project\Lvl1\Even;

use function cli\line;
use function cli\prompt;

function isEven($number)
{
    return $number % 2 === 0;
}

function evenGame()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May i have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $randNumber = rand(1, 100);

        line("Question: {$randNumber}");
        $answer = prompt("Your answer: ");

        if (isEven($randNumber)) {
            if ($answer !== "yes") {
                line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, %s!", $name);
                return null;
            }
        } else {
            if ($answer !== "no") {
                line("'no' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, %s!", $name);
                return null;
            }
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
}

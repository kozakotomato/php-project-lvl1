<?php

namespace  Php\Project\Lvl1\Cli;

use function cli\line;
use function cli\prompt;

function getName()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May i have your name?');
    line("Hello, %s!", $name);
}
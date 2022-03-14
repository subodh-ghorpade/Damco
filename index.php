<?php

use MyClasses\ProgramClass;

require_once 'vendor/autoload.php';


$programClass = new ProgramClass;

echo $programClass->countLanternFish([3,4,3,1,2], 18); // returns 26

echo '<br>';

echo $programClass->countLanternFish([3,4,3,1,2], 80); // returns 5934
<?php

use Farm\Farm;
use Farm\Animal\Chicken;
use Farm\Animal\Cow;

require_once 'Farm.php';
require_once 'Animal/FarmAnimal.php';
require_once 'Animal/Animal.php';
require_once 'Animal/Cow.php';
require_once 'Animal/Chicken.php';

$farm = new Farm();

for ($x = 0;$x < 10;$x++){
    $cow = new Cow();
    $farm->addAnimal($cow);
}

for ($x = 0;$x < 20;$x++){
    $cow = new Chicken();
    $farm->addAnimal($cow);
}

$farm->printAnimals();
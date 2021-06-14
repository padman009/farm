<?php

use Farm\Farm;
use Farm\Animal\Chicken;
use Farm\Animal\Cow;

require_once 'Farm.php';
require_once 'Animal/FarmAnimal.php';
require_once 'Animal/Cow.php';
require_once 'Animal/Chicken.php';
require_once 'Product/Product.php';
require_once 'Product/Egg.php';
require_once 'Product/Milk.php';

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

$farm->printProducts();

$farm->collectProducts();

$farm->printProducts();

$farm->collectProducts();

$farm->printProducts();
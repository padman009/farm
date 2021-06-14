<?php

use Farm\Farm;
use Farm\Animal\Chicken;
use Farm\Animal\Cow;

require_once 'vendor/autoload.php';

try {
    run();
} catch (Exception $e) {
    echo "Message: ".$e->getMessage().PHP_EOL;
    echo "Stack trace: ".$e->getTraceAsString().PHP_EOL;
    echo "File: ".$e->getFile().PHP_EOL;
    die();
}

/**
 * @throws Exception
 */
function run(){
    $farm = new Farm();

    for ($x = 0;$x < 10;$x++){
        $farm->addAnimal(new Cow());
    }

    for ($x = 0;$x < 20;$x++){
        $farm->addAnimal(new Chicken());
    }

    $farm->printAnimals();
    $farm->printProducts();

    $farm->collectProducts();
    $farm->printProducts();

    $farm->collectProducts();
    $farm->printProducts();
}
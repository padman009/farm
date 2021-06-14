<?php


namespace Farm\Animal;

use Farm\Product\Egg;

class Chicken extends FarmAnimal
{
    const ANIMAL_TYPE = 'CHICKEN';

    public function produce(): Egg
    {
        $productCount = rand(0, 1);
        return new Egg($productCount);
    }
}
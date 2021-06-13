<?php


namespace Farm\Animal;


use Farm\Product\Egg;

class Chicken extends Animal implements FarmAnimal
{

    const ANIMAL_TYPE = 'CHICKEN';

    public function produce()
    {
        $productCount = rand(0, 1);
        return new Egg($productCount);
    }
}
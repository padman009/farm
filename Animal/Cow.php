<?php


namespace Farm\Animal;


use Farm\Product\Milk;

class Cow extends FarmAnimal
{
    const ANIMAL_TYPE = 'COW';

    public function produce()
    {
        $productCount = rand(8, 12);
        return new Milk($productCount);
    }
}
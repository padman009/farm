<?php


namespace Farm;


use Farm\Animal;

class Farm
{
    protected array $animals = [];

    public function addAnimal(&$animal)
    {
        $uniqueId = self::getUniqueId($animal);
        $this->animals[$uniqueId] = $animal;
    }

    private static function getUniqueId($animal)
    {
        return spl_object_id($animal);
    }

    public function printAnimals()
    {
        foreach ($this->animals as $uniqueId => $animal) {
            echo $uniqueId." = ".$animal::ANIMAL_TYPE.PHP_EOL;
        }
    }

    public function printProducts()
    {
        //TODO
    }

}
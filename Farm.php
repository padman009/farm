<?php


namespace Farm;



class Farm
{
    protected array $animals = [];
    protected array $products = [];

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

    public function collectProducts()
    {
        $products = $this->products;

        foreach ($this->animals as $animal) {
            $product = $animal->produce();
            if(isset($products[$product::PRODUCT_TYPE])){
                $products[$product::PRODUCT_TYPE]->addCount($product);
            }else{
                $products[$product::PRODUCT_TYPE] = $product;
            }
        }

        $this->products = $products;
    }

    public function printProducts()
    {
        if(empty($this->products)){
            echo PHP_EOL."Farm doesn't have products.".PHP_EOL;
        }else{
            echo PHP_EOL."Farm's products:".PHP_EOL;
        }

        foreach ($this->products as $product) {
            echo "-".$product::PRODUCT_TYPE."s count ".$product->getCount().PHP_EOL;
        }
    }
}
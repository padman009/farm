<?php


namespace Farm\Product;


abstract class Product
{
    const PRODUCT_TYPE = '';
    protected int $count = 0;

    public function __construct($count)
    {
        $this->count = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

    protected function collectProduct()
    {
        $count = $this->count;
        $this->count = 0;
        return $count;
    }

    public function addCount($product)
    {
        $this->count += $product->collectProduct();
    }

}
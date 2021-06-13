<?php


namespace Farm\Product;


abstract class Product
{
    protected const PRODUCT_TYPE = '';
    protected $count;

    public function __construct($count)
    {
        $this->count = $count;
    }

    public function getCount()
    {
        return $this->count;
    }

}
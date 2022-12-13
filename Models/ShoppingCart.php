<?php
require_once __DIR__ . "/Products.php";
require_once __DIR__ . "/ToyProducts.php";
require_once __DIR__ . "/FoodProducts.php";

class ShoppingCart {
    public $products = [];

    function addProduct(Products $products)
    {
        $this->products[] = $products;
    }

    function getTotal(){
        $sum = 0;
        
        foreach($this->products as $product){
            $sum += $product->price;
        }

        return $sum;
    }
}
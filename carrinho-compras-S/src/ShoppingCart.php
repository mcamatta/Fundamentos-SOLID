<?php

namespace App;

class ShoppingCart 
{    
    private $items = [];

    public function getItems() {
        return $this->items;
    }

    public function setItem(Item $item) {
        array_push($this->items, $item);
    }

    public function validateShoppingCart() {
        return count($this->items) > 0;
    }
}
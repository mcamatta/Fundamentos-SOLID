<?php

namespace App;

class Order
{
    
    private $status = 'aberto';
    private $shoppingCart = null;
    private $totalValue = 0;

    public function __construct() {
        $this->shoppingCart = new ShoppingCart();
    }

    public function getShoppingCart() {
        return $this->shoppingCart;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status) {
        $this->status = $status;
    }

    public function getTotalValue() {
        foreach($this->shoppingCart->getItems() as $item) {
            $this->totalValue += $item->getValue();
        }
        return $this->totalValue;
    }

    public function confirm() {
        if($this->shoppingCart->validateShoppingCart()) {
            $this->setStatus('confirmado');
            return true;
        }
        return false;
    }

}
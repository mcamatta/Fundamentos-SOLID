<?php

namespace App;

class Item
{
    private $description;
    private $value;

    public function __construct(string $description, float $value) {
        $this->description = $description;
        $this->value = $value;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getValue() {
        return $this->value;
    }
}
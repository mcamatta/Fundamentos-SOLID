<?php

namespace App\Polygons;

class Rectangle
{
    protected float $height;
    protected float $width;

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }
    
    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): float
    {
        return $this->height;
    } 

    public function getWidth(): float
    {
        return $this->width;
    } 

}
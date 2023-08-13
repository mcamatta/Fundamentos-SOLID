<?php

namespace App\Polygons;

class Square
{
    protected float $height;
    protected float $width;

    public function setHeight(float $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
        $this->height = $width;
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

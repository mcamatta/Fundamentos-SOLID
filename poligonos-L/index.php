<?php
require './vendor/autoload.php';

use App\Polygon;
use App\Polygons\Rectangle;
use App\Polygons\Square;

$polygon = new Polygon();
$polygon->setShape(new Rectangle());
$polygon->getShape()->setHeight(5);
$polygon->getShape()->setWidth(10);
echo '<h3>Área do Retângulo: ' . $polygon->getArea() . '</h3>';

$polygon = new Polygon();
$polygon->setShape(new Square());
$polygon->getShape()->setHeight(5);
echo '<h3>Área do quadrado: ' . $polygon->getArea() . '</h3>';
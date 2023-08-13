<?php

use App\EmailService;
use App\Item;
use App\Order;

require './vendor/autoload.php';

$order = new Order();

$shape = new Item('shape', 100.0);
$truck = new Item('truck', 80.5);

$order->getShoppingCart()->setItem($shape);
$order->getShoppingCart()->setItem($truck);

echo '<h4>Itens do pedido</h4>';
echo '<pre>';
var_dump($order->getShoppingCart()->getItems());
echo '</pre>';

echo '<h4>Valor do pedido</h4>';
echo $order->getTotalValue();

echo '<h4>Status do pedido</h4>';
echo $order->getStatus();

echo '<h4>Confirmação do pedido</h4>';
if($order->confirm()) {
    echo EmailService::sendMail();
}

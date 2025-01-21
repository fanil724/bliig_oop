<?php

include "Buscet.php";
include "PC.php";
include "Transport.php";


$sblock = new SystemBlock("myblock");
$sblock->components = [
    new Component("memory", 5435),
    new Component("HDD", 7435),
    new Component("CPU", 13435),
    new Component("GPU", 23435)
];
$pc = new PC("MyPC");
$pc->components = [
    $sblock,
    new Component("mouse", 2435),
    new Component("keyboard", 3435),
    new Component("monitor", 13435),
];
$pc->calculatingPrice();
print_r($pc);


$car = new Car(2, "BMW", "X6M");
$ship = new Ship(8, "параход", "Титаник");
$airplane = new AirPlane(3, "Авиакор", "Ту-154");
$transports = [$car, $ship, $airplane];

foreach ($transports as $transport) {
    $transport->move();
    $transport->dispaly();
}



$buscet = new GroceryBasket();

$buscet->addProduct(new Product("хлеб", 34));
$buscet->addProduct(new Product("молоко", 54));
$buscet->addProduct(new Product("яблоки", 24));
$buscet->addProduct(new Product("картофель", 64));

$buscet->basketCounting();

echo $buscet->priceBuscet . PHP_EOL;
echo $buscet->countProduct . PHP_EOL;

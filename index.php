<?php
require_once __DIR__ . '/Models/Emporium.php';
require_once __DIR__ . '/Models/Products.php';


$emporium = new Emporium('Dog-Cat Shop', 'Via capitolini, 8');
$emporium->setCategory('Cani');
$emporium->genre = 'Negozio di animali';
$emporium->year = 2009;

$products = new Products('Monge', 'Via capitolini, 8');
$products->brand = 'Monge';

var_dump($emporium);
var_dump($products)

?>
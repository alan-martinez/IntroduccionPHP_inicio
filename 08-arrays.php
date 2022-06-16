<?php include 'includes/header.php';

$carrito = ['Tablet', 'Smartphone', 'Laptop'];

echo "<pre>";
var_dump($carrito);
echo "<pre>";

echo $carrito[1];

$carrito[3] = 'Nuevo producto';

echo "<pre>";
var_dump($carrito);
echo "<pre>";

//Añadir elemento al final
array_push($carrito, 'Nuevo producto2');

echo "<pre>";
var_dump($carrito);
echo "<pre>";

//Añadir al inicio del
array_unshift($carrito, 'Nuevo producto3');

echo "<pre>";
var_dump($carrito);
echo "<pre>";
include 'includes/footer.php';
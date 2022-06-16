<?php include 'includes/header.php';

//in_array - revisa si un valor existe en un arreglo
$carrito = ['Producto 1', 'Producto 2', 'Producto 3'];

var_dump( in_array('Producto 1', $carrito));
echo '<br>';
var_dump( in_array('Producto 4', $carrito));
echo '<br>';

//Ordenar elementos de un arreglo 
$numeros = array(1,4,2,3,8);
sort($numeros); //de menor a mayor
rsort($numeros); //de mayor a menor

echo '<pre>';
var_dump($numeros);
echo '</pre>';

//ordenar arreglo asociativo     
$cliente = array(
    'saldo' => 100,
    'tipo' => 'premium',
    'nombre' => 'Juan'
);

asort($cliente); //ordena por valores
ksort($cliente); //ordena por llaves
krsort($cliente); //ordena por llaves (de la z a la a)
asort($cliente); //ordena por valores (de menor a mayor las letras)
arsort($cliente); //ordena por valores (de mayor a menos las letras)

echo '<pre>';
var_dump($cliente);
echo '</pre>';


include 'includes/footer.php';
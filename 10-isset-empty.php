<?php include 'includes/header.php';

$clientes = [];
$clientes = array();
$clientes3 = array('Pedro', 'Juan', 'Maria');

//Empy - revisa si un arreglo esta vacio
var_dump (empty($clientes));
var_dump (empty($clientes3));
var_dump (empty($clientes2));

//Isset - revisa si un arreglo ya ha sido creado o una propiedad esta definifa
echo "<br>";
var_dump ( isset($clientes4));
echo "<br>";
var_dump ( isset($clientes));
echo "<br>";
var_dump ( isset($clientes2));
echo "<br>";
var_dump ( isset($clientes3));

include 'includes/footer.php';
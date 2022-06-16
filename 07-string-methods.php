<?php include 'includes/header.php';

$nombreCliente = 'Alan Jahir';

//Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco 
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertir a matusculas
echo strtoupper($nombreCliente);
//Convertir a minusculas
echo strtolower($nombreCliente);

$mail = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));

echo str_replace('Alan', 'M', $nombreCliente);

//Revisar si un string existe
echo strpos($nombreCliente, 'Alan');

$tipoCliente = 'Premium';
echo "El cliente es un " . $tipoCliente;

include 'includes/footer.php';
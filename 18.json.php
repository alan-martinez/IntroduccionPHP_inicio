<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => True
    ],
    [
        'nombre' => 'Televisión',
        'precio' => 300,
        'disponible' => True
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //Convierte de arreglo a string
echo "<pre>";
$json_array = json_decode($json, JSON_UNESCAPED_UNICODE); //Convierte de string a arreglo
var_dump($json);
echo "<pre>";
var_dump($json_array);
echo "<pre>";



include 'includes/footer.php';
<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 300,
    'pedidos' => [
        'pedido1' => 'Arroz',
        'pedido2' => 'Pollo',
        'pedido3' => 'Carne',
        'pedido4' => 'Pescado'
    ]
];

echo '<pre>';
var_dump($cliente['nombre']);
echo '<pre>';
var_dump($cliente['saldo']);
echo '<pre>';
var_dump($cliente['pedidos']['pedido1']);
echo '<pre>';

$cliente['codigo'] = 124654;
var_dump($cliente);
echo '<pre>';


include 'includes/footer.php';
<?php include 'includes/header.php';

$autenticado = False;
$admin = True;

if ($autenticado || $admin) {
    echo 'Autenticado';
}else {
    echo 'No autenticado';
}

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

if (empty($cliente)){
    echo 'El cliente no tiene pedidos';
}else{
    echo 'El cliente tiene pedidos';

    if ($cliente['saldo'] > 0){
        echo 'El cliente tiene saldo';
    }else{
        echo 'El cliente no tiene saldo';
    }
}

include 'includes/footer.php';
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

//else if
if ($cliente['saldo'] < 0){
    echo 'El cliente tiene saldo';
}else if($cliente['pedidos']['pedido1'] === 'Arroz'){
    echo 'El cliente tiene pedido de arroz';
}else{
    echo 'El cliente esta incompleto';
}

echo '<br>';
//switch
$tecnologia = 'C++';
switch($tecnologia){
    case 'PHP':
        echo 'PHP';
        break;
    case 'C++':
        echo 'C++';
        break;
    default:
        echo 'No se que tecnologia es';
        break;
}

include 'includes/footer.php';
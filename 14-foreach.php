<?php include 'includes/header.php';

$clientes = array('Pedro', 'Juan', 'Maria', 'Luis', 'Jorge');

foreach ($clientes as $c){
    echo $c . '<br>';
}

for($i =0; $i < count($clientes); $i++){
    echo $clientes[$i] . '<br>';
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 300,
    'tipo' => 'Premium'
];

foreach ($cliente as $key => $valor):
    echo $key . ' ' . $valor . '<br>';
endforeach;

echo '<br>';
echo '<br>';
echo '<br>';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => True
    ],
    [
        'nombre' => 'Television',
        'precio' => 300,
        'disponible' => True
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

foreach( $productos as $producto){ ?>
    // echo '<pre>';
    // var_dump($producto);
    // echo '<pre>';
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "$ " .  $producto['precio']; ?> </p>
        <p>Disponible: <?php echo $producto['disponible'] ? 'Disponible' : 'No disponible'; ?> </p>
    </li>
    <?php
    // echo '<pre>';
    // var_dump($producto);
    // echo '</pre>';
}

include 'includes/footer.php';
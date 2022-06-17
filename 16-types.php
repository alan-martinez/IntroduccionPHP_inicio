<?php 
declare (strict_types=1);

use LDAP\Result;

include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string|int {
    if ($autenticado){
        return "Autenticado";
    }
    else{
        // return "No autenticado";
        return 20;
    }
}

$usuario = usuarioAutenticado(false);

echo $usuario;

include 'includes/footer.php';
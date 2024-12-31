<?php include 'includes/header.php';

// Crear variables
$nombre = 'Ever';
$apellido = 'Vasquez';

// Concatenar
echo $nombre . ' ' . $apellido;

// Cambiar el valor de la variable
$nombre = 'Ever 2';

// Imprimir
echo $nombre;

// Constantes
define('constante', 'Valor de la constante');
echo constante;

const constante2 = 'Valor de la constante 2';
echo constante2;

// Constantes predefinidas
echo PHP_VERSION;

include 'includes/footer.php';
<?php 
declare(strict_types=1); // Para que PHP sea mas estricto en los tipos de datos
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string {
    return ($autenticado ? "El usuario esta autenticado. Bienvenido." : "El usuario no esta autenticado. Inicia sesion.");
}


$usuario = usuarioAutenticado(false);
echo $usuario;

// Ejercicio: Crear una funcion que reciba un arreglo de colores y devuelva la longitud del arreglo. 
// Si el arreglo esta vacio, devolver un mensaje que diga "El arreglo esta vacio."
function calcularLongitud(array $colores) : string|int {
    return (empty($colores) ? "El arreglo esta vacio." : count($colores));
}

$colores = ['Rojo', 'Azul', 'Verde'];
$ordenar = calcularLongitud($colores);
echo $ordenar;

echo "<br>";

echo calcularLongitud([]);

include 'includes/footer.php';
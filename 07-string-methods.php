<?php include 'includes/header.php';

$nombre_cliente = "  Ever         Vasquez";

echo strlen($nombre_cliente);
var_dump($nombre_cliente);
echo "<br>";

$texto = trim($nombre_cliente); // Elimina los espacios en blanco al inicio y al final
echo strlen($texto);
echo $texto;
echo "<br>";

echo strtoupper($nombre_cliente); // Convierte a mayúsculas

echo strtolower($nombre_cliente); // Convierte a minúsculas
echo "<br>";

echo str_replace('Ever', 'Samuel', $nombre_cliente); // Reemplaza una cadena por otra
echo "<br>";

// Revisar si un string existe o no
echo strpos($nombre_cliente, 'Ever'); // Devuelve la posición de la cadena
echo "<br>";

// Concatenar
$tipo_cliente = "Premium";
echo "El cliente " . $nombre_cliente . " es " . $tipo_cliente;
echo "<br>";
echo "El cliente {$nombre_cliente} es {$tipo_cliente}";

include 'includes/footer.php';
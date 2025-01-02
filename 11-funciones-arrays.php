<?php include 'includes/header.php';

// iin_array - Busca un valor en un arreglo
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));


// Ordenar elementos de un arreglo
$numeros = array(1, 3, 4, 5, 1,2);

sort($numeros); // De menor a mayor
rsort($numeros); // De mayor a menor

// echo "<pre>";
// var_dump($numeros);
// echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Ever'
);

asort($cliente); // Ordena por valores
arsort($cliente); // Ordena por valores en orden inverso
ksort($cliente); // Ordena por llaves
krsort($cliente); // Ordena por llaves en orden inverso

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
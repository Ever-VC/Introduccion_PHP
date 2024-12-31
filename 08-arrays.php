<?php include 'includes/header.php';

$carrito = [];
// var_dump($carrito);
// $carrito1 = array();
// var_dump($carrito1);

$carrito = ['Tablet', 'Computadora', 'Television'];
echo "<pre>";
var_dump($carrito);
echo "</pre>";

echo $carrito[1];

// Agregar elementos a un array
$carrito[3] = 'Nuevo Producto';

// Agregar elementos al final de un array
array_push($carrito, 'Audifonos');

// Agregar elementos al inicio de un array
array_unshift($carrito, 'Smartwatch');

// Agregar elementos en un índice específico
array_splice($carrito, 2, 0, 'Monitor'); // (array, indice, cantidad a eliminar, elemento a agregar)

echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Eliminar elementos de un array
array_pop($carrito); // Elimina el último elemento

array_shift($carrito); // Elimina el primer elemento

array_splice($carrito, 1, 1); // Elimina un elemento en un índice específico (array, indice, cantidad a eliminar)

echo "<pre>";
var_dump($carrito);
echo "</pre>";


include 'includes/footer.php';
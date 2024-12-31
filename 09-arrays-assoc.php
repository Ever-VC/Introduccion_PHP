<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente['nombre'];

echo $cliente['informacion']['tipo'];

// Agregar elementos a un array
$cliente['codigo'] = 1234;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Modificar elementos de un array
$cliente['nombre'] = 'Alberto';

echo "<pre>";
var_dump($cliente);
echo "</pre>";


// Eliminar elementos de un array
unset($cliente['informacion']);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
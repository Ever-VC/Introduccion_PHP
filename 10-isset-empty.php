<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$clientes = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty revisa si un arreglo esta vacio
var_dump(empty($clientes));

// Isset revisa si un arreglo esta creado o si una propiedad esta definida
var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));

// Isset tambien se puede usar para revisar si una propiedad esta definida
var_dump(isset($clientes['nombre']));
var_dump(isset($clientes['codigo']));


include 'includes/footer.php';
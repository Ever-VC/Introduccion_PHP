<?php include 'includes/header.php';

// While loop
$i = 0; // Inicializador
while($i <= 10) { // Condicion
    //echo $i . "<br>";
    $i++; // Incremento
}

//echo "<br>";

// Do while loop
$i = 100;
do {
    //echo $i . "<br>";
    $i++;
} while($i <= 10);

//echo "<br>";

// For loop
for($i = 0; $i <= 10; $i++) {
    //echo $i . "<br>";
}


/**
 * Fizz Buzz - Imprimir numeros del 1 al 100
 * Si el numero es divisible entre 3, imprimir Fizz
 * Si el numero es divisible entre 5, imprimir Buzz
 * Si el numero es divisible entre 3 y 5, imprimir Fizz Buzz
*/

/*
for ($j = 1; $j <= 100; $j++) {
    if ($j % 3 === 0 && $j % 5 === 0) {
        echo $j . " Fizz Buzz <br>";
    } else if ($j % 3 === 0) {
        echo $j . " Fizz <br>";
    } else if ($j % 5 === 0) {
        echo $j . " Buzz <br>";
    } else {
        echo $j . "<br>";
    }
}
*/

// For each loop
$clientes = [
    'Ever',
    'Karen',
    'Dayana'
];

foreach($clientes as $cliente) {
    echo $cliente . "<br>";
}

$cliente = [
    'nombre' => 'Ever',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach($cliente as $key => $valor) {
    echo $key . " - " . $valor . "<br>";
}

include 'includes/footer.php';
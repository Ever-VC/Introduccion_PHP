<?php include 'includes/header.php';

$numero1 = 30;

// Incrementar en 1

$numero1++; // Incrementar en 1
echo $numero1; // Mostrar (Se muestra primero y luego se incrementa al hacerlo con el operador de incremento después del número)
echo "<br>";
echo ++$numero1; // Incrementar en 1 y luego mostrar
echo "<br>";

// Decrementar en 1

$numero1--; // Decrementar en 1
echo $numero1; // Mostrar (Se muestra primero y luego se decrementa al hacerlo con el operador de decremento después del número)
echo "<br>";
echo --$numero1; // Decrementar en 1 y luego mostrar
echo "<br>";

// Incrementar en 5

$numero1 += 5; // Incrementar en 5
echo $numero1; // Mostrar


include 'includes/footer.php';
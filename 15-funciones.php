<?php 
declare(strict_types=1); // Para que PHP sea mas estricto en los tipos de datos
include 'includes/header.php';

function sumar($numero1, $numero2) {
    echo $numero1 + $numero2;
}

sumar(10, 20);
echo "<br>";

function restar(int $numero1 = 0, int $numero2 = 0) {
    return $numero1 - $numero2;
}

$resultado = restar(10, 5);

echo $resultado;
echo "<br>";

function dividir($numero1, $numero2) {
    if($numero2 === 0) {
        echo "No se puede dividir entre 0";
    } else {
        return $numero1 / $numero2;
    }
}

$resultado = dividir(10, 5);

echo $resultado;
echo "<br>";

function saludar($nombre = 'Invitado') {
    echo "Hola $nombre";
}

saludar('Ever');
echo "<br>";
saludar();
echo "<br>";



include 'includes/footer.php';
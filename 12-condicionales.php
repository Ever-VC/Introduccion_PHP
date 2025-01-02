<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado || $admin) {
    echo "El usuario esta autenticado";
} else {
    echo "El usuario no esta autenticado, inicia sesion"; 
}

echo "<br>";

// If anidado
$cliente = [
    'nombre' => 'Ever',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if (!empty($cliente)) {
    echo "El arreglo de cliente no esta vacio";
    echo "<br>";
    if ($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo";
    } else {
        echo "No hay saldo";
    }
} else {
    echo "No hay cliente";
}

echo "<br>";

// Else if
if ($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El cliente es Premium";
} else {
    echo "No hay cliente";
}

echo "<br>";

// Switch
$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "Desarrollo web con PHP";
        break;
    case 'JavaScript':
        echo "Desarrollo web con JavaScript";
        break;
    case 'HTML':
        echo "Desarrollo web con HTML";
        break;
    default:
        echo "Desarrollo web";
        break;
}

include 'includes/footer.php';
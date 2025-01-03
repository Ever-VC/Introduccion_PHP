<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvi MSI 27"',
        'precio' => 400,
        'disponible' => false
    ]
];

echo '<pre>';
//var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
//evar_dump($json);

$json_array = json_decode($json, true);
var_dump($json_array);
echo '</pre>';




include 'includes/footer.php';
<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvi MSI 27"',
        'precio' => 400,
        'disponible' => false
    ]
];

foreach($productos as $producto) { 
    /*
    echo "<p>Producto: " . $producto['nombre'] . "</p>";
    echo "<p>Precio: $" . $producto['precio'] . "</p>";
    echo "<p>" . ($producto['disponible'] ? 'Disponible' : 'No disponible') . "</p>";
    echo "<br>";
    
    $diponibilidad = $producto['disponible'] ? 'Disponible' : 'No disponible';
    echo
    <<<OUTPUT
    <p>Producto: {$producto['nombre']}</p>
    <p>Precio: $ {$producto['precio']}</p>
    <p>{$diponibilidad}</p>
    OUTPUT;
    */
    ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?></p>
        <p>Precio: <?php echo '$' . $producto['precio']; ?></p>
        <p><?php echo  ($producto['disponible'] ? 'Disponible' : 'No disponible'); ?></p>
    </li>
    <br>

    <?php
}


include 'includes/footer.php';
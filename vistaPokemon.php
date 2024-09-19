<?php
// detalle_pokemon.php

// Conexión a la base de datos
require("movimientos.php"); // Asumiendo que tienes un archivo de conexión
$movi = new Movimientos();
// Obtener el ID desde la URL
if (isset($_GET['id'])) {
    $id_pokemon = $_GET['id'];

    // Consulta para obtener los datos del Pokémon con ese ID
    $sql = "SELECT * FROM pokemon WHERE id = $id_pokemon";
    $resultado = $movi->getDb()->query($sql);
    $fila = $resultado[0];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/vistaPokemon.css">
    <title>Detalle del Pokémon</title>
</head>
<body>

    <nav>
        s
    </nav>
        <section class="contenedor">
         
        <div class="container-pokemon">
        <img src="<?php echo $fila['ruta_pokemon']; ?>" class="pokemon">
    </div>
    
    <div class="container2">
        <img src="<?php echo $fila['ruta_tipo']; ?>" alt="Tipo" class="tipo">
         <h1 class = "nombre"><?php echo $fila['nombre']; ?></h1>
        </div>
       
        <div class="descripcion">
            <h2 class="descri"><?php echo $fila['descripcion']; ?></h2>
        </div>
       
        </section>
</body>
</html>

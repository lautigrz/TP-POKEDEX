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

    <style>
        nav{
            display:flex;
            width: 55%;
            justify-content: space-between;
            margin:20px;
            
            
        }

        nav > h1{
            font-size:30px
        }
    </style>
</head>
<body>

    <nav>
    <img src="imagenes/icon/images.png" alt="pokeball" style="width: 60px; height: 60px;">
        <h1>Pokedex</h1>
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

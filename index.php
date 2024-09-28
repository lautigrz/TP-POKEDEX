<?php
session_start();
require("movimientos.php");

$movi = new Movimientos();

$buscar = isset($_GET['buscado']) ? trim($_GET['buscado']) : '';

$datos = $movi->busqueda($buscar);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/usuarioAdmin.css">
    <title>Admin</title>
</head>
<body>
    <?php include_once("nav-filtrado.mustache");?>
<section class="tablas">
    <?php

    if (isset($_SESSION['mensaje'])) {
        $mensaje = $_SESSION['mensaje'];


        $clase = strpos($mensaje, "Error") === false ? 'query-exito' : 'query-error';
        echo "<div class=\"$clase\">$mensaje</div>";

        unset($_SESSION['mensaje']);
    }
    ?>
    <table>
        <tr>
            <th>Imagen</th>
            <th>Tipo</th>
            <th>Número</th>
            <th>Nombre</th>

        </tr>


        <?php foreach ($datos as $fila): ?>
            <tr>

                <td> <a href="vistaPokemon.php?id=<?php echo $fila['id']; ?>">
                        <img src="<?php echo $fila['ruta_pokemon']; ?>" alt="Pokemon" class="img-sc">
                    </a></td>
                <td><img src="<?php echo $fila['ruta_tipo']; ?>" alt="Tipo" class="img-sc"  ></td>
                <td><?php echo $fila['numero']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>


</section>
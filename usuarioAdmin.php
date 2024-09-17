
<?php 
session_start();
require("database.php");

$db = new Database();

$query = "SELECT * FROM pokemon";

$datos = $db->query($query);
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
    <?php include_once("header.php"); ?>
    
    <div class="ancla">
    <a href="#nuevo-pokemon">Agregar nuevo pokemon</a>
    </div>
    
 
    <section class="tablas">
    <?php

    if (isset($_SESSION['update'])) {
        $mensaje = $_SESSION['update'];

  
        $clase = strpos($mensaje, "Error") === false ? 'query-exito' : 'query-error';
        echo "<div class=\"$clase\">$mensaje</div>";
   
        unset($_SESSION['update']);
    }
        ?>
    <table>
            
                <tr>
                    <th>Imagen</th>
                    <th>Tipo</th>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
           
         
                <?php foreach ($datos as $fila): ?>
                    <tr>
                    
                        <td><img src="<?php echo $fila['ruta_pokemon']; ?>" alt="Imagen Jugador" class="img-sc" ></td>
                        <td><img src="<?php echo $fila['ruta_tipo']; ?>" alt="Imagen Equipo" class="img-sc"  ></td>
                        <td><?php echo $fila['numero']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td id="formu"><form action="update-modificar.php" method="post">
                            <input type="hidden" name="modificar" value="<?php echo $fila['numero']; ?>">
                            <input type="submit" value="Modificar" class="update" id="modificar">
                        </form>
                        <form action="update.php" method="post">
                        <input type="hidden" name="eliminar" value="<?php echo $fila['numero']; ?>">
                        <input type="submit" value="Eliminar" class="update" id="eliminar">
                        </form>
                    </td>
                    </tr>
                <?php endforeach; ?>
            
        </table>


    </section>

    
    <section class="nuevo-jugador" id="nuevo-pokemon">
    <?php

    if (isset($_SESSION['mensaje'])) {
        $mensaje = $_SESSION['mensaje'];
       
        $clase = strpos($mensaje, "Error") === false ? 'mensaje-exito' : 'mensaje-error';
        echo "<div class=\"$clase\">$mensaje</div>";

        unset($_SESSION['mensaje']);
    }
    ?>
        <form action="subirNuevoPokemon.php" method="post" enctype="multipart/form-data"
        class="w3-card-4 w3-padding">

        <div class="contenedor">
        <label for="jugador">Subir pokemon</label>
        <input type="file" name="pokemon" id="jugador" required> 
        </div>
          
        <div class="contenedor">
        <label for="equipo">Tipo</label>
        <select name="tipo-poke" id="">
            <option value="0">Seleccionar tipo</option>
            <option value="fuego">Fuego</option>
            <option value="agua">Agua</option>
            <option value="hierba">Hierba</option>
        </select>
        </div>
           
            <input type="text" name="numero" placeholder="Numero" required>
            <input type="text" name="nombre" placeholder="Nombre"required>
          
            <input type="submit" value="Subir" class="subir">
        </form>

   
    </section>
</body>
</html>
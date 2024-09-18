<?php 
session_start();
require("database.php");

$db = new Database();

$modificar = $_POST["modificar"];

$sql = "SELECT * FROM pokemon WHERE id = $modificar";
$resultado = $db->query($sql);

// Verificar que se encontraron resultados
if (!empty($resultado)) {
    $pokemon = $resultado[0];
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .editar{
            display:flex;
            justify-content:center;
            align-items:center;
            width: 100%;
            height:100vh;
        }
        form{
            display:flex;
            flex-direction:column;
            width: 25%;
            gap:1px
         
           
        }

        input{
            height:5vh
        }
    </style>
</head>
<body>

    <section class="editar">
        <form action="update.php" method="post" enctype="multipart/form-data"
        class="w3-card-4 w3-padding">

        <div class="contenedor">
        <label for="jugador">Subir jugador</label>
        <input type="file" name="pokemon-mod" id="jugador" required> 
        </div>
          
        <div class="contenedor">
        <label for="equipo">Tipo</label>
        <select name="tipo-poke-mod" id="">
            <option value="0">Seleccionar tipo</option>
            <option value="fuego">Fuego</option>
            <option value="agua">Agua</option>
            <option value="hierba">Hierba</option>
        </select>
        </div>
           
            <input type="text" name="numero" value="<?php echo ($pokemon['numero']); ?>" required>
            <input type="text" name="nombre" value="<?php echo ($pokemon['nombre']); ?>"required>
            <input type="hidden" name="modificar" value="<?php echo ($pokemon['id']); ?>">
            <input type="submit" value="Subir" class="subir">
        </form>
    </section>

</body>
</html>
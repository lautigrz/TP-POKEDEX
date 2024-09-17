<?php 
    session_start(); 
    require("database.php");

    $db = new Database();

    if (isset($_FILES['pokemon']) && ($_POST['tipo-poke']) != 0) {
    
      
        $directorio = 'imagenes/';
    
       
        $imagenPokemon = basename($_FILES['pokemon']['name']);
    
   
        $extensionPokemon = strtolower(pathinfo($imagenPokemon, PATHINFO_EXTENSION));

  
        $nuevoNombrePokemon = uniqid('pokemon_') . '.' . $extensionPokemon;
       

        $rutaImagenPokemon = $directorio . $nuevoNombrePokemon;
    
        moverImagenesAlDirectorio($rutaImagenPokemon, $db);
        
    } else {
        $_SESSION['mensaje'] = "Error al subir las imagenes";
        echo "error primer if";
          header("Location: usuarioAdmin.php");
          exit();
        }
    
    

    function moverImagenesAlDirectorio($rutaImagenPokemon, $db){
        // Mover los archivos al directorio de destino
        if (move_uploaded_file($_FILES['pokemon']['tmp_name'], $rutaImagenPokemon)) {

            $tipoPoke = $_POST['tipo-poke'];
            
            echo  $tipoPoke;

            $nombre = $_POST['nombre'];
            $numero = $_POST['numero'];
            $rutaTipo = buscarTipo($tipoPoke);
            $data = [
                'ruta_pokemon' => $rutaImagenPokemon,
                'ruta_tipo' =>  $rutaTipo,
                'numero' => $numero,
                'nombre' => $nombre,
               
            ];

            $tabla = "pokemon";

            subirAlaBaseDeDatos($db,$tabla, $data);
          
    } else {
    $_SESSION['mensaje'] = "Error";
    header("Location: usuarioAdmin.php");
    exit();
}
}

function subirAlaBaseDeDatos($db,$tabla, $data){

    try {
        if ($db->insert($tabla, $data) === true) {
            $_SESSION['mensaje'] = "Las imágenes y los datos se han subido correctamente.";
        } else {
            $_SESSION['mensaje'] = "Error al subir las imágenes.";
        }
    } catch (Exception $e) {
   
        $_SESSION['mensaje'] = "Error, identificador duplicado";
    }

    header("Location: usuarioAdmin.php");
    exit();
}

function buscarTipo($value){
    echo "Buscando: " . htmlspecialchars($value) . "<br>";

 
    $directorio = 'imagenes/tipo/';
    
    $archivos = array_diff(scandir($directorio), array('.', '..'));

    $archivoBuscado = $value . '.png';


    if (in_array($archivoBuscado, $archivos)) {      
        return $directorio . $archivoBuscado;
    } else {
        return null;
    }

}

?>
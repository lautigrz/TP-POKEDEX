<?php 
session_start();
require("database.php");

$db = new Database();


if(isset($_POST["eliminar"])){
    $eliminar = $_POST["eliminar"];

   eliminarDeLaCarpetaLocal($eliminar, $db);

    $sql = "DELETE FROM pokemon WHERE numero = $eliminar";
   
    if( $db->delete($sql) == true){

    $_SESSION['update'] = "Se elimino correctamente.";
    header("Location: usuarioAdmin.php");
    
}else{
    $_SESSION['update'] = "Error, no se pudo eliminar.";
}
}else if(isset($_POST['id'])){

    $modificar = $_POST['id'];
    $numero = $_POST['numero'];
    $nombre = $_POST['nombre'];

    $sql = "UPDATE pokemon 
    SET nombre = '$nombre', numero = '$numero'
    WHERE id = $modificar";


    
    if( $db->delete($sql) == true){
        header("Location: usuarioAdmin.php");
    }else {
        $_SESSION['update'] = "Error, no se pudo hacer la modificacion";
    }
    //

}

function eliminarDeLaCarpetaLocal($id, $db){
    $sql = "SELECT ruta_pokemon FROM pokemon WHERE numero = $id";
    

    $resultado = $db->query($sql);
  
    if (!empty($resultado)) {

      
        $fila = $resultado[0];
        $rutaPokemon = $fila['ruta_pokemon'];
       
  
        $rutaPokeCompleta = __DIR__ . DIRECTORY_SEPARATOR . $rutaPokemon;

      
        if (file_exists( $rutaPokeCompleta)){

            unlink($rutaPokeCompleta);
        } 
    } else {
        $_SESSION['update'] = " Error, no se encontraron resultados para el identificador proporcionado.";
    }
}

?>
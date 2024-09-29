<?php 
session_start();

require_once("movimientos.php");

$movi = new Movimientos();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    switch(true){
        case isset($_POST["eliminar"]):
            eliminarFila($movi);
            break;
        case isset($_POST["modificar"]):
            modificarFila($movi);
            break;
        case isset($_FILES['pokemon']):
            subirPokemon($movi);
            break;
    }
    
    header("Location: usuarioAdmin.php");
}

function subirPokemon($movi){
        $rutaImagenPokemon = devolverRuta('pokemon');
        $tipoPoke = $_POST['tipo-poke'];
        $rutaTipo = $movi->buscarTipo($tipoPoke);

        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $rutaImagen = $rutaImagenPokemon;
        $descripcion = $_POST['descripcion'];

        if($tipoPoke != 0){
            $data = [
                'ruta_pokemon' => $rutaImagenPokemon,
                'ruta_tipo' =>  $rutaTipo,
                'numero' => $numero,
                'nombre' => $nombre,
                'descripcion' => $descripcion,
            ];
            $movi->moverImagenAlDirectorioSiNoExiste($rutaImagenPokemon, 'pokemon');
            $movi->subirAlaBaseDeDatos($data);
        }else{
            $_SESSION['mensaje'] = "Error, debe elegir un tipo";
        }

       
}

function modificarFila($movi){

    $modificar = $_POST['modificar'];
    $tipoPoke = $_POST['tipo-poke-mod'];

    $ruta = $movi->obtenerRutaDeImagenDeUnPokemonPorId($modificar);
    $rutaImagenPokemon = devolverRuta('pokemon-mod');
    $movi->moverImagenAlDirectorioSiNoExiste($rutaImagenPokemon, 'pokemon-mod');

    $cambio = verificarSiCambioDeImagen($ruta,$rutaImagenPokemon);

    $rutaTipo = $movi->buscarTipo($tipoPoke);
    $numero = $_POST['numero'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE pokemon 
    SET ruta_pokemon = '$rutaImagenPokemon', ruta_tipo = '$rutaTipo',  nombre = '$nombre', numero = '$numero', descripcion = ' $descripcion'
    WHERE id = $modificar";

    if( $movi->getDb()->delete($sql) == true){

        if($cambio == true){
            $movi->eliminarDeLaCarpetaLocal($ruta);
        }

        $_SESSION['mensaje'] = "Modificacion exitosa";
        
    }else {
        $_SESSION['mensaje'] = "Error, no se pudo hacer la modificacion";
    }
    
    
}

function eliminarFila($movi){
    $eliminar = $_POST["eliminar"];

    $ruta = $movi->obtenerRutaDeImagenDeUnPokemonPorId($eliminar);
    $sql = "DELETE FROM pokemon WHERE id = $eliminar";
   
    if( $movi->getDb()->delete($sql) == true){

    $_SESSION['mensaje'] = "Se elimino correctamente.";
    $movi->eliminarDeLaCarpetaLocal($ruta);

    }
   
}

function devolverRuta($var){
    $directorio = 'imagenes/';
    
    $imagenPokemon = basename($_FILES[$var]['name']);

    return $rutaImagenPokemon = $directorio . $imagenPokemon;
}

function verificarSiCambioDeImagen($rutaActual, $rutaDespues){

    if($rutaActual != $rutaDespues){
        return true;
    }

    return false;
}

?>
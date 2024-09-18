<?php 
    require_once("database.php");
class Movimientos{
    
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function moverImagenAlDirectorioSiNoExiste($rutaImagenPokemon, $campo){
   
           
            if ($this->yaExisteImagen(basename($rutaImagenPokemon))) {
             
            }else{
                move_uploaded_file($_FILES[$campo]['tmp_name'], $rutaImagenPokemon);
                
            }
}

public function subirAlaBaseDeDatos($data){
    $tabla = "pokemon";
    try {
        if ($this->db->insert($tabla, $data) === true) {
            $_SESSION['mensaje'] = "Las imágenes y los datos se han subido correctamente.";
        } else {
            $_SESSION['mensaje'] = "Error al subir las imágenes.";
        }
    } catch (Exception $e) {
   
        $_SESSION['mensaje'] = "Error, identificador duplicado";
    }



}

public function buscarTipo($value){
  
    $directorio = 'imagenes/tipo/';
    
    $archivos = array_diff(scandir($directorio), array('.', '..'));

    $archivoBuscado = $value . '.png';


    if (in_array($archivoBuscado, $archivos)) {      
        return $directorio . $archivoBuscado;
    } else {
        return null;
    }

}

public function yaExisteImagen($ruta){
    $directorio = 'imagenes/';
    
    $archivos = array_diff(scandir($directorio), array('.', '..'));

    return in_array($ruta, $archivos);
}

public function eliminarDeLaCarpetaLocal($ruta){
    
    $conteo = $this->obtenerCuantasFilaTienenLaMismaRutaDeImagen($ruta);
   
    if ($conteo == 0) {
       
            $rutaPokeCompleta = __DIR__ . DIRECTORY_SEPARATOR . $ruta;
    
            // Elimina el archivo si existe
            if (file_exists($rutaPokeCompleta)) {
                unlink($rutaPokeCompleta);
            }
    }
}

public function obtenerCuantasFilaTienenLaMismaRutaDeImagen($ruta){
    $query = "SELECT COUNT(*) AS total FROM pokemon WHERE ruta_pokemon = '$ruta'";
    $cont = $this->db->query($query);

    $fila = $cont[0];

    return $fila['total'];
}

public function obtenerRutaDeImagenDeUnPokemonPorId($id){
    $sql = "SELECT ruta_pokemon FROM pokemon WHERE id = $id";
    $resultado = $this->db->query($sql);
    $fila1 = $resultado[0];
    return $fila1 ['ruta_pokemon'];
}

public function getDb() {
    return $this->db;
}

}

?>
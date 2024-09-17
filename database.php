<?php 
class Database
{
    private $conexion;

    public function __construct($server = "localhost",
                                $usuario = "root",
                                $pass = "",
                                $database = "tppoke")
    {
        $this->conexion = new mysqli(
            $server,
            $usuario,
            $pass,
            $database);
    }


    public function insert($table, $data) {
        // Generar las partes de la consulta
        $columns = implode(", ", array_keys($data));
        $values = implode(", ", array_map(function($value) {
            return "'" . $this->conexion->real_escape_string($value) . "'";
        }, array_values($data)));
        

        $colums = $this->obtenerColumnas($data);
        $values = $this->obtenerDatos($data);

        // Crear la consulta SQL
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        
        // Imprimir la consulta para depuración
        echo "Consulta SQL: " . $sql . "<br>";
        
        // Ejecutar la consulta
        if ($this->conexion->query($sql) === TRUE) {
            return true; // Devuelve el ID del último registro insertado
        } else {
            return "error";
        }
    }

    public function obtenerColumnas($data){

        $columnas = array_keys($data);

        $columna = '';
    
        foreach($columnas as $index => $column){

            $columna .= $column;

            
            if($index < count($columnas) -1){
                $columna .= ', ';
        
               
            }

        }

        return $columna;


    }

    public function obtenerDatos($data) {
      
        $values = array_values($data);
        
       
        $valor = '';
    
      
        foreach ($values as $index => $valores) {
          
            $valor .= "'" . $this->conexion->real_escape_string($valores) . "'";
            
            if ($index < count($values) - 1) {
                $valor .= ', ';
            }
        }
    
        // Devolver la cadena de valores
        return $valor;
    }
    
    

    public function query($sql){
        return $this->conexion->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function delete($sql){
        return $this->conexion->query($sql);
    }

    public function __destruct()
    {
        $this->conexion->close();
    }
}
?>
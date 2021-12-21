<?php 
require_once('../config.php');
class Modelo{
    protected $db;
    public function __construct()
    {
        $this->db = mysqli_connect(DB_HOST, DB_USUARIO, DB_PWD, DB_NOMBRE, DB_PUERTO);
        if($this->db->connect_errno){
            echo "Error de conexion a la base de datos";
        //}else{
          //  echo "Conexion exitosa a la BD";
        }
    }
}

?>

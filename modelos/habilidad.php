<?php
require_once('modelo.php');

//Modelo usuario
class Habilidad extends Modelo{
    private $id;
    private $nombre_tabla;

    /*
    CONSTRUCTOR
    Descripcion: conecta a la base de datos
    */
    public function __construct()
    {
        parent::__construct();  //conexion a la base de datos
        $this->id = 'hab_id';
        $this->nombre_tabla = 'habilidad';
    }

    //Obtener todos los registros de la tabla
    public function get_all(){
        $consulta = "SELECT * FROM $this->nombre_tabla";
        $resultado = $this->db->query($consulta);  //realizando consulta a la base de datos
        if(!$resultado){
            echo "Error al listar los datos de la tabla";
        } else{
            return $resultado->fetch_all(MYSQLI_ASSOC); //array asociativo
            $resultado->close();
            $this->db -> close();
        }
    }

    //Obtener 1 registro de la tabla categoria cuyo ID de envia por el parametro
    public function get($id){
        $consulta = "SELECT * FROM $this->nombre_tabla WHERE $this->id =".$id;
        $resultado = $this->db->query($consulta);
        if(!$resultado){
            echo "Error al listar los datos de la tabla";
        }else{
            return $resultado->fetch_assoc();
            $resultado->close();
            $this->db->close();
        }
    }

    //Guardar 1 registro en la BD
    public function store($data){  //Array []
        $consulta = "INSERT INTO $this->nombre_tabla (usu_id, hab_descripcion) VALUES ('".$data['usu_id']."', '".$data['hab_descripcion']."');";
        $resultado = $this->db->query($consulta);  //realizando consulta a la BD
        if(!$resultado){
            echo "Error al registrar en la BD";
        }else{
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }
    //Actualizar 1 registro en la BD
    public function update($id, $data){  //Array []
        $consulta = "UPDATE $this->nombre_tabla SET usu_id = '".$data['usu_id']."', hab_descripcion = '".$data['hab_descripcion']."' WHERE $this->id =".$id;
        $resultado = $this->db->query($consulta);  //realizando consulta a la BD
        if(!$resultado){
            echo "Error al actualizar en la BD";
        }else{
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }
    //Eliminar 1 registro en la BD
    public function delete($id){  //Array []
        $consulta = "DELETE * FROM $this->nombre_tabla WHERE $this->id =".$id;
        $resultado = $this->db->query($consulta);  //realizando consulta a la BD
        if(!$resultado){
            echo "Error al eliminar en la BD";
        }else{
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }
}
?>
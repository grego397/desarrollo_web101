<?php
require_once('modelo.php');

//Modelo usuario
class Articulo extends Modelo{
    private $id;
    private $nombre_tabla;

    /*
    CONSTRUCTOR
    Descripcion: conecta a la base de datos
    */
    public function __construct()
    {
        parent::__construct();  //conexion a la base de datos
        $this->id = 'art_id';
        $this->nombre_tabla = 'articulo';
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
        //$consulta = "INSERT INTO $this->nombre_tabla (usu_id, cat_id, art_titulo,	art_resumen, art_detalle, art_foto ) VALUES ('".$data['usu_id']."', '".$data['cat_id']."', '".$data['art_titulo']."', '".$data['art_resumen']."', '".$data['art_detalle']."', '".$data['art_foto']."');";
        //$resultado = $this->db->query($consulta);  //realizando consulta a la BD
        $resultado = $this->db->prepare("INSERT INTO $this->nombre_tabla (usu_id, cat_id, art_titulo, art_resumen, art_detalle, art_foto) values (?,?,?,?,?,?)");
        $resultado->bind_param("iissss", $data['usu_id'], $data['cat_id'], $data['art_titulo'], $data['art_resumen'], $data['art_detalle'], $data['art_foto']);
        //realizando consulta a la BD
        if(!$resultado->execute()){
            return null;
        }else{
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }
    //Actualizar 1 registro en la BD
    public function update($id, $data){  //Array []
        $consulta = "UPDATE $this->nombre_tabla SET usu_id = '".$data['usu_id']."', cat_id = '".$data['cat_id']."', art_titulo = '".$data['art_titulo']."', art_resumen = '".$data['art_resumen']."', art_detalle = '".$data['art_detalle']."', art_foto = '".$data['art_foto']."' WHERE $this->id =".$id;
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
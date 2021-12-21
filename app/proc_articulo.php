<?php 
require_once('../modelos/articulo.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $op = $_POST['operacion'];
    switch($op){
        case "store":
            
            //$data['cat_id']=htmlspecialchars($_POST['cat_id']);
            
            $data['art_titulo']=htmlspecialchars($_POST['art_titulo']);
            $data['art_resumen']=htmlspecialchars($_POST['art_resumen']);
            $data['art_detalle']=htmlspecialchars($_POST['art_detalle']);
            $data['art_foto']="foto_articulo.jpg";
            $data['usu_id']=1;
            $data['cat_id']=1;
            $articulo = new Articulo();
            $articulo->store($data);
            header('Location:'.APP_URL.'app/listar_articulo.php');
            break;
        case "update":
            break;
        case "delete":
            break;
        default:
        echo "esta operacion no esta permitida";
    }
}else{
    echo "esta operacion no esta permitida";
}
?>
 	 	 	 	
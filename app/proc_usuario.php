<?php 
require_once('../modelos/usuario.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $op = $_POST['operacion'];
    switch($op){
        case "store":
            $data['usu_usr']=htmlspecialchars($_POST['usu_usr']);
            $data['usu_password']=htmlspecialchars($_POST['usu_password']);
            $data['usu_nombres']=htmlspecialchars($_POST['usu_nombres']);
            $data['usu_primer_apellido']=htmlspecialchars($_POST['usu_primer_apellido']);
            $data['usu_segundo_apellido']=htmlspecialchars($_POST['usu_segundo_apellido']);
            $data['usu_descripcion_usuario']=htmlspecialchars($_POST['usu_descripcion_usuario']);
            $data['usu_descripcion_contacto']=htmlspecialchars($_POST['usu_descripcion_contacto']);
            $usuario = new Usuario();
            $usuario->store($data);
            header('Location:'.APP_URL.'app/listar_usuario.php');
            break;
        case "update":
            break;
        case "delete":
            break;
    }
}
?>
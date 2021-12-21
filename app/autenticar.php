<?php
require_once('../modelos/usuario.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $op = $_POST['operacion'];
    switch($op){
        case "login":           
            $usuario = new Usuario();
            $usr=$_POST['usr'];
            $pwd=$_POST['pwd'];
            $item = $usuario->get_por_usuario($usr);
            if($item !== null){
                echo "El usuario existe";
                //$a = password_hash('12345');
                if(password_verify($pwd, $item['usu_password'])){
                    echo "AUTENTICADO CORRECTAMENTE";
                    session_start(); //Crea un archivo en el servidor y tambien crea un cookie
                    $_SESSION['usu_id'] = $item['usu_id'];
                    $_SESSION['usu_nombres'] = $item['usu_nombres'];
                    $_SESSION['usu_primer_apellido'] = $item['usu_primer_apellido'];
                    header('Location:'.APP_URL.'app/crear_articulo.php');
                }else{
                    echo "EL PASSWORD NO ES CORRECTA";
                }
            }else{
                echo "El usuario no existe";
            }
            
            break;
        case "logout":
            //destruir la cookie en navegador
            if(ini_get("session.use_cookies")){
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time()-42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
            }
            session_destroy(); //Destruccion de la session en servidor
            header('Location:'.APP_URL);
            break;
        default:
            echo "esta operacion no esta permitida";
    }
}else{
    echo "esta operacion no esta permitida";
}
?>
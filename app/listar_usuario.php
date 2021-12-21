<?php 
session_start();
require_once('../components/adm_head.php');
require_once('../components/adm_top_menu.php');
require_once('../components/adm_left_menu.php');
require_once('../modelos/usuario.php');

if(!isset($_SESSION['usu_id'])){
    header('Location:'.APP_URL.'app/login.php');
}

$usuario = new Usuario();
$lista_us = $usuario->get_all();
?>
<!--INICIO CONTENIDO PRINCIPAL -->
<div class="contenedor-principal">
            <div>
                <h1>Listado de Articulos</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USUARIO</th>
                            <th>PASWORD</th>
                            <th>NOMBRES</th>
                            <th>AP. PATERNO</th>
                            <th>AP MATERNO</th>
                            <th>OPERACIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista_us as $item): ?>
                        <tr>
                            <td><?= $item['usu_id'] ?></td>
                            <td><?= $item['usu_usr'] ?></td>
                            <td><?= $item['usu_password'] ?></td>
                            <td><?= $item['usu_nombres'] ?></td>
                            <td><?= $item['usu_primer_apellido'] ?></td>
                            <td><?= $item['usu_segundo_apellido'] ?></td>
                            <td></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
</div>
<!--FIN CONTENIDO PRINCIPAL -->
<?php 
require_once('../components/adm_footer.php');
?>
<?php 
session_start();
require_once('../components/adm_head.php');
require_once('../components/adm_top_menu.php');
require_once('../components/adm_left_menu.php');
require_once('../modelos/articulo.php');

if(!isset($_SESSION['usu_id'])){
    header('Location:'.APP_URL.'app/login.php');
}

$articulo = new Articulo();
$lista_articulo = $articulo->get_all();
?>
<!--INICIO CONTENIDO PRINCIPAL -->
<div class="contenedor-principal">
            <div>
                <h1>Listado de Articulos</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>RESUMEN</th>
                            <th>OPERACIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista_articulo as $item): ?>
                        <tr>
                            <td><?= $item['art_id'] ?></td>
                            <td><?= $item['art_titulo'] ?></td>
                            <td><?= $item['art_resumen'] ?></td>
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
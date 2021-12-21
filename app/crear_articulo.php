<?php
session_start();
require_once('../components/adm_head.php');
require_once('../components/adm_top_menu.php');
require_once('../components/adm_left_menu.php');
if(!isset($_SESSION['usu_id'])){
    header('Location:'.APP_URL.'app/login.php');
}
?>
<!--INICIO CONTENIDO PRINCIPAL -->
<div class="contenedor-principal">
    <div>
        <h1>Nuevo Articulo</h1>
        <form action="<?= APP_URL?>app/proc_articulo.php" method="post">
            <input type="hidden" name="operacion" value="store">
            <div class="grid-1">
                <div class="form-item">
                    <label for="">Titulo Articulo</label>
                    <input type="text" name="art_titulo" placeholder="Defina el Titulo del articulo">
                </div>
                <div class="form-item">
                    <label for="">Resumen Articulo</label>
                    <textarea type="text" name="art_resumen" placeholder="Defina el resumen del articulo"></textarea>
                </div>
                <div class="form-item">
                    <label for="">Contenido Articulo</label>
                    <textarea rows="5" type="text" name="art_detalle" placeholder="Defina el contenido del articulo"></textarea>
                </div>
            </div>
            <div class="grid-3">
                <div class="form-item">
                    <label for="">Categoria</label>
                    <select name="cat_id" id="cat_id">
                        <option value="">Seleccione una opcion</option>
                        <option value="1">A</option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="">Imagen</label>
                    <input type="file" name="art_foto">
                </div>
            </div>
            <div class="grid-3">
                <div class="form-item">
                    <button type="submit" class="btn">Guardar Datos</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--FIN CONTENIDO PRINCIPAL -->
<?php
require_once('../components/adm_footer.php');
?>
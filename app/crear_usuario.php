<?php
session_start();
require_once('../components/adm_head.php');
require_once('../components/adm_top_menu.php');
require_once('../components/adm_left_menu.php');
if (!isset($_SESSION['usu_id'])) {
    header('Location:' . APP_URL . 'app/login.php');
}
?>
<!--INICIO CONTENIDO PRINCIPAL -->
<div class="contenedor-principal">
    <div>
        <h1>Nuevo Usuario</h1>
        <form action="<?= APP_URL ?>app/proc_usuario.php" method="post">
            <input type="hidden" name="operacion" value="store">
            <div class="grid-1">
                <div class="form-item">
                    <label for="">Usuario</label>
                    <input type="text" name="usu_usr" placeholder="Ingresar Usuario">
                </div>
                <div class="form-item">
                    <label for="">Password</label>
                    <input type="password" name="usu_password" placeholder="Ingresar Password">
                </div>
                <div class="form-item">
                    <label for="">Nombres</label>
                    <input type="text" name="usu_nombres" placeholder="Ingresar su nombre">
                </div>
                <div class="form-item">
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="usu_primer_apellido" placeholder="Ingresar Apellido paterno">
                </div>
                <div class="form-item">
                    <label for="">Apellido Materno</label>
                    <input type="text" name="usu_segundo_apellido" placeholder="Ingresar Apellido materno">
                </div>
                <div class="form-item">

                </div>
                <div class="form-item">
                    <label for="">Descripcion Usuario</label>
                    <textarea type="text" name="usu_descripcion_usuario" placeholder="Describa su descripcion"></textarea>
                </div>
                <div class="form-item">
                    <label for="">Descripcion Contacto</label>
                    <textarea type="text" name="usu_descripcion_contacto" placeholder="Describa su contacto "></textarea>
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
<div class="header">
        <div class="logo">
            <img class="menu-logo" src="../assets/img/logo2.png" alt="logo de mi blog">
        </div>
        <div>
            <ul class="top-menu">
                <li><a href="#"><i class="fas fa-home"></i>Inicio</a></li>
            </ul>
        </div>
        <div>
            <a href="#" class="btn" id="btn_user">
                USUARIO: <?= $_SESSION['usu_nombres']  ?>
            </a>
            <div id="user_menu">
                <div class="lista-barra">
                    <ul>
                        <li><a href="#">Ver Perfil</a></li>
                        <li><a href="#">Actualizar Contraseña</a></li>
                        <li>
                            <form action="<?= APP_URL?>app/autenticar.php" method="post">
                            <input type="hidden" name="operacion" value="logout">
                            <button type="submit">Cerrar Session</button>
                            </form>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
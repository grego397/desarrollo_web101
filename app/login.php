<?php 
require_once('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= APP_URL ?>assets/img/logotipo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= APP_URL ?>assets/css/app.css">
    <link rel="stylesheet" href="<?= APP_URL ?>assets/css/brands.min.css">
    <link rel="stylesheet" href="<?= APP_URL ?>assets/css/fontawesome.min.css">
    <title>Login del Blog</title>
    <style>
        
    </style>
</head>
<body class="login-page">
    <div></div>
    <div class="form-login">
        <img class="blog-logo" src="<?= APP_URL ?>assets/img/logo2.png" alt="logo de mi blog">
        <h2>Formulario de acceso</h2>
        <form action="<?= APP_URL?>app/autenticar.php" method="post">
            <input type="hidden" name="operacion" value="login">
            <label for="">Usuario</label>
            <input type="text" name="usr" id="usr">
            <label for="">Contraseña</label>
            <input type="password" name="pwd" id="pwd">
            <br>
            <button type="submit"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
        </form>
    </div> 
    <div></div>  
</body>
</html>
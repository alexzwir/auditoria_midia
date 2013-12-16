<?php

include "config/config.php";

if ( $_POST['login_usuario'] = "admin" && $_POST['senha_usuario'] = "admin") {

    header('Location: home.php');
    exit;

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Auditoria de Mídia</title>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="admin.css" />
	</head>
	<body id="admin">
        <div id="content">
            <div class="form-login">
                <form id="form" action="index.php" method="post">
                    <p class="title">Auditoria de Midia</p>
                    <p><label>Login: </label><input type="text" value="" name="login_usuario"/></p>
                    <p><label>Senha: </label><input type="password" value="" name="senha_usuario" id="senha"/></p>
                    <p><input type="submit" class="enviar" value="Enviar" /></p>
                </form>
            </div>
        </div>

    </body>
</html>

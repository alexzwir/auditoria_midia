<?php

// session_start();
// if(isset($_SESSION['usuario_id'])){
//   header("location:lista.php");
//   exit;
// }



if($_POST){

    if($_POST['login'] == 'teste' && $_POST['senha'] == 'teste'){

        $_SESSION['usuario_id'] = 1;
        header("location:home.php");
        exit;

    } else {
        echo "<script>alert('Dados incorretos!'); window.location='index.php';</script>";
        exit;
    }

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
                    <p class="title">Auditoria</p>
                    <p><label>Login: </label><input type="text" value="" name="login" id="login"/></p>
                    <p><label>Senha: </label><input type="password" value="" name="senha" id="senha"/></p>
                    <p><input type="submit" class="enviar" value="Enviar" /></p>
                </form>
            </div>
        </div>

    </body>
</html>

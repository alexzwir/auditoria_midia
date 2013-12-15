<?php
  $servidor = "iguatemibusinesssjrp.com.br";
  $database = "ibjrp";
  $usuario = "ibjrp";
  $senha = "n2y767GWd";
	mysql_connect($servidor,$usuario,$senha);
	mysql_select_db($database);
?>




<?php

session_start();

if(!$_SESSION['usuario_id']){
  header("location:index.php");
  exit;
}

?>


<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>


	<h1>Sem bem vindo:<?php echo $_SESSION['usuario_id'];?> </h1>


	<ul>
		<a href="#"><li>Home</li></a>
		<a href=""><li>Dashboard</li></a>
		<a href="lista.php"><li>Lista de Contados</li></a>
		<a href="logout.php"><li>Logout</li></a>


	</ul>

	<section>
		<h2><a href="">Dashboard</a></h2>
		<p>Veja os gráficos abaixo:</p>

		<div id="acessos">Grafico de acesso</div>


	</section>


</body>
</html>
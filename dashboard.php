<?php 
include "config/config.php"

?>

<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<table style="border: 1px solid black;">
		<tr>
			<td>Quantidade Total de cadastros</td>
			<td>Quantidade Total por house de vendas</td>
			<td>Quantidade de vendas</td>
			<td>Quantidade total de contatos efetuados</td>
			<td>Quantidade de contatos pendentes</td>
		</tr>
		<tr>
			<?php
				$result = mysql_query("SELECT * FROM lista_contatos ", $link);
				$num_rows = mysql_num_rows($result);

				echo "<td>". $num_rows ." cadastros</td>";

			



			?>		
			



		</tr>

	

	</table>
</body>
</html>
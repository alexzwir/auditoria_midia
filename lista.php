<?php
  include "config/config.php";
  $query =  "SELECT * FROM lista_contatos"; 
  $resultado = mysql_query($query);
?>

<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>
  <div id="pai">
    <table>
      <thead>
        <tr>
          <th>ID Cliente</th>
          <th>Data de Cadastro</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>House</th>
          <th>utm_source</th>
          <th>utm_medium</th>
          <th>utm_campaign</th>
          <th>Obs</th>
          <th>Status Cliente</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          while ($row = mysql_fetch_assoc($resultado)) {
            echo "<tr>
                    <td>".$row['id_cliente']."</td>".
                     "<td>".$row['data_cadastro']."</td>".
                     "<td>".$row['nome_cliente']."</td>".
                     "<td>".$row['email_cliente']."</td>".
                     "<td>".$row['tel_cliente']."</td>".
                     "<td>".$row['house_vendas']."</td>".
                     "<td>".$row['utm_source']."</td>".
                     "<td>".$row['utm_medium']."</td>".
                     "<td>".$row['utm_campaign']."</td>".
                     "<td>".$row['obs']."<input type=''> <a href='editar.php'>Editar</a></td>".
                     "<td>
                       <select>
                        <option value='sem_status'>Sem Status</option>
                        <option value='sem_interesse'>Sem interesse</option>
                        <option value='sem_contato'>Sem contato</option>
                        <option value='vendido'>Vendido</option>
                       </select>
                     </td>
                  </tr>";
            }
         ?>
      </tbody>
    </table>
  </div>

</body>
</html>
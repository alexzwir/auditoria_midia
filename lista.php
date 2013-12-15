<?php
  include "config.php";
  include "session.php";
  $query = mysql_query("SELECT * FROM formulario ORDER BY id ASC");
  $row1 = mysql_num_rows($query);
  $queryc = mysql_query("SELECT * FROM chat ORDER BY id ASC");
  $rowc = mysql_num_rows($queryc);
?>
	
<!-- INICIO DO HTML ================================================= -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
	<head>


    <title>Admin </title>
    <link type="text/css" rel="stylesheet" href="../style.css" />
    <link type="text/css" rel="stylesheet" href="admin.css" />
    <meta charset="UTF-8">
      

<!-- TAG DE CHAMADA DO JQUERY ================================================ -->
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      
<!-- FUNCAO DE MOSTRAR E ESCONDER OS CONTATOS DO E-MAIL E CHAT ================ -->
      <script type="text/javascript">
        $(document).ready(function(){
          $("#content1").hide();
            //FUNCAO MOSTRAR AO CLICAR NOS BOTÕES CHAT OU E-MAIL
            $("#mostrar").click(function(event){
              event.preventDefault();
              $("#content1").show("slow");
              $("#content").hide("slow");
            });

            //FUNCAO OCULTAR AO CLICAR NOS BOTÕES CHAT OU E-MAIL
            $("#ocultar").click(function(event){
              event.preventDefault();
              $("#content").show("slow");
              $("#content1").hide("slow");
            });
        });   
      </script>
  </head>

<!-- BODY DO ADMIN ============================================================= -->
  <body id="admin">
    <form id="form">
         <table width="50%" align="center">
         <tr>
          <td align="center"><button id="mostrar" class="enviar1">Chat</button></td>
          <td align="center"><button id="ocultar" class="enviar1">Cadastros</button></td>  
         </tr>
         </table>   
    </form>
   <div id="content1" class="lista">
    <h2>Chat<a href="lista-chat.php"><img src="excel.png"></a> <a href="logout.php" style="float:right;font-size: 12px;"><img src="delete.png" alt="Sair"/></a></h2>
    <table cellpadding="5" border="0" width="100%" id="lista">
      <tbody>
      <tr class="primary">
        <td><strong>Data</strong></td>
        <td><strong>Nome</strong></td>
        <td><strong>E-mail</strong></td>
        <td><strong>Telefone</strong></td>
        <td><strong>Chat</strong></td>
        <td><strong>Utm_campaign</strong></td>
        <td><strong>Utm_medium</strong></td>
        <td><strong>Utm_source</strong></td>
      </tr>
      <?php while($rowch = mysql_fetch_array($queryc,1)){ ?>
        <tr>
          <td><?php echo $rowch['data']; ?></td>
          <td><?php echo $rowch['nome']; ?></td>
          <td><?php echo $rowch['email']; ?></td>
          <td><?php echo $rowch['telefone']; ?></td>
          <td><?php echo $rowch['chat']; ?></td>
          <td><?php echo $rowch['utm_campaign']; ?></td>
          <td><?php echo $rowch['utm_medium']; ?></td> 
          <td><?php echo $rowch['utm_source']; ?></td>                                                
        </tr>
      </tbody>
    </table>
   </div>
    <div id="content" class="lista">
    <h2>Cadastros <a href="lista-cadastro.php" target="_blank"><img src="excel.png"></a> <a href="logout.php" style="float:right;font-size: 12px;"><img src="delete.png" alt="Sair"/></a></h2>
    <table cellpadding="5" border="0" width="100%" id="lista">
      <tbody>
      <tr>
        <td><strong>ID</strong></td>
        <td><strong>Nome</strong></td>
        <td><strong>Telefone</strong></td>
        <td><strong>E-mail</strong></td>
        <td><strong>Mensagem</strong></td>
        <td><strong>Destinat&aacute;rio</strong></td>
        <td><strong>Source</strong></td>
        <td><strong>Medium</strong></td>
        <td><strong>Campaing</strong></td>
      </tr>
      <?php while($row = mysql_fetch_array($query,1)){ ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nome']; ?></td>
          <td><?php echo $row['telefone']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['mensagem']; ?></td>      
          <td><?php echo $row['destinatario']; ?></td>                                               
          <td><?php echo $row['utm_source']; ?></td>                                               
          <td><?php echo $row['utm_medium']; ?></td>                                               
          <td><?php echo $row['utm_campaign']; ?></td>                                               
        </tr>   
      </tbody>
    </table>    
   </div>
  </body>
</html>
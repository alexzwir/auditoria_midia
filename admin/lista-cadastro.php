<?php
  $servidor = "iguatemibusinesssjrp.com.br";
  $database = "ibjrp";
  $usuario = "ibjrp";
  $senha = "n2y767GWd";
  mysql_connect($servidor,$usuario,$senha);
  mysql_select_db($database);

  $query = mysql_query("SELECT * FROM formulario ORDER BY id ASC");
  $row1 = mysql_num_rows($query);

    $nome_arquivo = "Cadastro";
    header("Content-type: application/vnd.ms-excel");
    header("Content-type: application/force-download");
    header("Content-Disposition: attachment; filename=$nome_arquivo.xls");
    header("Pragma: no-cache");

  $html = '';
  $html .= "<body>";
  $html .=  "<table>";
  $html .=    "<tbody>";
  $html .=    "<tr>";
  $html .=      "<td><strong>Nome</strong></td>";
  $html .=      "<td><strong>Telefone</strong></td>";
  $html .=      "<td><strong>E-mail</strong></td>";
  $html .=      "<td><strong>Mensagem</strong></td>";
  $html .=      "<td><strong>Destinat&aacute;rio</strong></td>";
  $html .=      "<td><strong>Utm_campaign</strong></td>";
  $html .=      "<td><strong>Utm_medium</strong></td>";
  $html .=      "<td><strong>Utm_source</strong></td>";
  $html .=    "</tr>";

      while($row = mysql_fetch_array($query,1)){ 
        $nome = $row['nome'];
        $tel = $row['telefone'];
        $email = $row['email'];
        $msg = $row['mensagem'];
        $dest = $row['destinatario'];
        $utm1 = $row['utm_campaign'];
        $utm2 = $row['utm_medium'];
        $utm3 = $row['utm_source'];
        
        $html .= "<tr>";
        $html .=  "<td>$nome</td>";
        $html .=  "<td>$tel</td>";
        $html .=  "<td>$email</td>";
        $html .=  "<td>$msg</td>";
        $html .=  "<td>$dest</td>";
        $html .=  "<td>$utm1</td>"; 
        $html .=  "<td>$utm2</td>"; 
        $html .=  "<td>$utm3</td>";                                                
        $html .= "</tr>";
      }
      $html .= "</tbody>";
    $html .= "</table>";
  $html .= "</body>";

    echo $html;
?>
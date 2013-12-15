<?php
    $servidor = "iguatemibusinesssjrp.com.br";
    $database = "ibjrp";
    $usuario = "ibjrp";
    $senha = "n2y767GWd";
    mysql_connect($servidor,$usuario,$senha);
    mysql_select_db($database);

if(!$_SESSION['usuario_id']){
  header("location:index.php");
  exit;
}

$queryc = mysql_query("SELECT * FROM chat ORDER BY id ASC");
$rowc = mysql_num_rows($queryc);

    $nome_arquivo = "Chat";
    header("Content-type: application/vnd.ms-excel");
    header("Content-type: application/force-download");
    header("Content-Disposition: attachment; filename=$nome_arquivo.xls");
    header("Pragma: no-cache");

$html = '';
$html .=  "<body>";
$html .=    "<table>";
$html .=      "<tbody>";
$html .=      "<tr>";
$html .=        "<td><strong>Data</strong></td>";
$html .=        "<td><strong>Nome</strong></td>";
$html .=        "<td><strong>E-mail</strong></td>";
$html .=        "<td><strong>Telefone</strong></td>";
$html .=        "<td><strong>Chat</strong></td>";
$html .=        "<td><strong>Utm_campaign</strong></td>";
$html .=        "<td><strong>Utm_medium</strong></td>";
$html .=        "<td><strong>Utm_source</strong></td>";
$html .=      "</tr>";

      while($rowch = mysql_fetch_array($queryc,1)){
        $data = $rowch['data'];
        $nome = $rowch['nome'];
        $tel = $rowch['telefone'];
        $email = $rowch['email'];
        $chat = $rowch['chat'];
        $utm1 = $rowch['utm_campaign'];
        $utm2 = $rowch['utm_medium'];
        $utm3 = $rowch['utm_source'];
        
$html .=        "<tr>";
$html .=          "<td>$data</td>";
$html .=          "<td>$nome</td>";
$html .=          "<td>$email</td>";
$html .=          "<td>$tel</td>";
$html .=          "<td>$chat</td>";
$html .=          "<td>$utm1</td>";
$html .=          "<td>$utm2</td>";
$html .=         " <td>$utm3</td>";                                                
$html .=        "</tr>";
       } 
$html .=      "</tbody>";
$html .=    "</table>";
$html .=  "</body>";

echo $html;

?>
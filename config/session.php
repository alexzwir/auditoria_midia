<?php

session_start();

if(!$_SESSION['usuario_id']){
  header("location:index.php");
  exit;
}

?>
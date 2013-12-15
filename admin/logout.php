<?php
    session_start();
    unset($_SESSION['usuario_id']);
    header("location:index.php");
?>
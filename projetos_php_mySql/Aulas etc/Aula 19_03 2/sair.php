<?php 
session_start();
unset($_SESSION["usuario"]); // unset(var); -serve para apagar uma única variável da seção
session_destroy();
header("Location:index.php");
?>
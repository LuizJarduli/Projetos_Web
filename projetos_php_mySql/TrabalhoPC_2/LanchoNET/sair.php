<?php 
session_start();// iniciando uma sessão
session_destroy();// destruindo a sessão e por consequência os dados da super global Session
header("Location: index.php"); // redirecionando o usuário para o início
?>
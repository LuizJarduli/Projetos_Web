<meta charset="utf-8">
<?php 
$conexao = mysqli_connect("localhost","root","","login") or die("Não foi possível conectar-se à base de dados");// funcão para fazer conexão com banco de dados, funciona com 4 parâmetros: 1º endereço do banco de dados(ip ou nome),2º o super usuário do banco de dados(no caso do wamp é o root), 3º parâmetro é a senha do seu banco de dados,4º parâmetro é o banco de dados que será manipulado. Or die: caso não consiga conexão com o BD a função vai exibiar uma mensagem para o usuário
?>
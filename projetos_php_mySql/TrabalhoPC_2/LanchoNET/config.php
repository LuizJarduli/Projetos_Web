<?php 
/*Criando a conexão com o banco de dados com o mysqli_connect:
1º parâmetro = endereço do banco
2º parâmetro = usuário do banco
3º parâmetro = senha, caso nao tenha deixe em branco
4º parâmetro = o banco de dados a ser conectado*/
$conexao = mysqli_connect("localhost","root","","lanchonet");

// configurações necessárias paara que todos os caracteres sejam inseridos corretamente dento do banco
mysqli_query($conexao,"SET NAMES 'utf8'");
mysqli_query($conexao,'SET character_set_connection=utf8');
mysqli_query($conexao,'SET character_set_client=utf8');
mysqli_query($conexao,'SET character_set_results=utf8');

function mask($val, $mask) // função de saída para criação de máscaras que podem ser usadas para representar dados
{
	 $maskared = '';
	 $k = 0;
	 for($i = 0; $i<=strlen($mask)-1; $i++)
	 {
		 if($mask[$i] == '#')
		 {
			 if(isset($val[$k]))
			 $maskared .= $val[$k++];
		 }
		 else
		 {
			 if(isset($mask[$i]))
			 $maskared .= $mask[$i];
		 }
	 }
	 return $maskared;
}
?>
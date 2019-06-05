<?php
//faz o link com a pagina conexao
require_once 'db_connect.php';
if($_POST) {
	// captura as variaveis digitadas no formulario
	$nomecomputador = $_POST['nomecomputador'];
	$ip				= $_POST['ip'];
	
	$sql = "insert into computadores (nome, ip) values ( '$nomecomputador', '$ip')";
	// verificar se deu tudo certo
	
	if($connect->query($sql) === true) {
		echo "dados inseridos com sucesso!";
	}	else {
		echo "error: ".$sql.$connect->connect_error;
	}
	$connect->close();
}
?>
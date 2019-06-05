<?php
	//definindo variaveis de conexao

	$servidor = "faccon-0359";
	$usuario  = "root";
	$senha    = "faccon";
	$banco    = "monitorderedes";

	// Criar conexao
	
	$connect = new mysqli($servidor, $usuario, $senha, $banco);
	
	// checar conexao
	
	if ($connect->connect_error) {
		 die("conexao falhou : ".$connect->connect_error);
	}	else {
		  echo "conexao realizada com sucesso:";
	}
	


?>
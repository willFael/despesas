<?php

require_once('db.class.php');

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$mes = $_POST['mes'];

$objDb = new db();
$link = $objDb-> conecta_mysql(); // conexaõ com o mysql
$sql = "INCERT INTO  tbdespesa (nome, valor, tipo, mes) VALUES ('$nome','$valor', '$tipo', '$mes')";
//executar a query o comando mysqli_query(conexão com o banco, a Sql);
if (maysqli_query($link,$sql))// esta função retorna uma condição, então para se ter uma resposta usa-se o if.
{ echo 'Despesa cadastrada!';}
else { 
	echo 'Erro ao cadastar despesa!';} 

?>

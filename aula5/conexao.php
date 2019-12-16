<?php

$server = "localhost";
$username="root";
$password="";
$dbname="cursophp";

$conexao = mysqli_connect($server,$username,$password,$dbname);

//var_dump($connect);

if(!$conexao){
	echo "Erro na conexao";
}else{
	echo "Conectou com sucesso.";
}



?>
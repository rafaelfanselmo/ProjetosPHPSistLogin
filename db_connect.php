<?php 

// Conexão com o banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

// a função mysqli_connect tem suporte ampliado apra procedural e OO
$connect = mysqli_connect($servername,$username,$password,$db_name);

if (mysqli_connect_error()) {
	echo "Falha na conexão: ".mysqli_connect_error();
}
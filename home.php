<?php
// Conexão
require_once 'db_connect.php';

//sessão
session_start();

// Verificação
if (!isset($_SESSION['logado'])) {
	header('Location: index.php');
}

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuario WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
/*var_dump($dados);*/
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Restrita</title>
</head>
<body>
	<h1>Area Restrita</h1> <br>
	<h2>Olá <?php echo $dados['nome']; ?></h2><br>
	<a href="logout.php">Sair</a>
</body>
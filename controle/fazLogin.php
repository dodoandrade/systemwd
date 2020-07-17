<?php

include 'conecta.php';

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);

$consulta = mysqli_query($conexao, "SELECT * FROM usuarios WHERE USUARIO = '$usuario' and SENHA = '$senha'");

if (mysqli_num_rows($consulta) == 1) {

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;

	header('location:index.php');
}else{
	header('location:index.php?erro');
}
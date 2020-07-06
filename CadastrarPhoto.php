<?php
header("content-type:text/html; charset=utf8");
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$cep = mysqli_real_escape_string($conexao, trim($_POST['cep' ]));
$rua = mysqli_real_escape_string($conexao, trim($_POST['rua']));
$numero = mysqli_real_escape_string($conexao, trim($_POST['numero']));
$tipo = mysqli_real_escape_string($conexao, trim($_POST['tipo']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$bairro = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
$uf = mysqli_real_escape_string($conexao, trim($_POST['uf']));

$sql = "select count(*) as total from fotografo where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['fotografo_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO fotografo (nome, cpf, email, usuario, senha, cep, rua, numero, data_cadastro, tipo, cidade, bairro, uf) VALUES ('$nome', '$cpf', '$email', '$usuario', '$senha', '$cep', '$rua', '$numero', NOW(), '$tipo', '$cidade', '$bairro', '$uf')";
//var_dump($sql); die();

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}else{
	echo("<script>alert('ERROR!')</script>");
}

$conexao->close();

header('Location: index-logadoPhoto.html');
exit;
?>


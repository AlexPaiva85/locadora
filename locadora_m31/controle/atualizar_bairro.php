<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto locadora</title>
    <link rel='stylesheet' type='text/css' href='../estilos/geral.css'>
</head>
<body>
<h1>Atualizar de bairro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("../controle/conexao.php");
try{
  $cod_bairro = $_POST['cmb_bairro'];
  $up_bairro = $_POST['txt_bairro'];
  $sql = "UPDATE bairro set bairro='$up_bairro' WHERE cod_bairro=$cod_bairro";
  $conn->query($sql);
  echo "<p>Bairro atualizado com sucesso!</p><a href='http://localhost/locadora_m31'>Voltar</a></h3>";
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
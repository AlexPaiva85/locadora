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
<h1>Atualizar montadora</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("../controle/conexao.php");
try{
  $cod_montadora = $_POST['cmb_montadora'];
  $up_montadora = $_POST['txt_montadora'];
  $sql = "UPDATE montadora set montadora='$up_montadora' WHERE cod_montadora=$cod_montadora";
  $conn->query($sql);
  echo "<p>Montadora atualizado com sucesso!</p><a href='http://localhost/locadora_m31'>Voltar</a></h3>";
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
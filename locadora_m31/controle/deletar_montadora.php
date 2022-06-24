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
<h1>Exclusão de montadora</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("../controle/conexao.php");
try{
  $cod_montadora = $_POST['cmb_montadora'];
  $sql = "DELETE FROM Montadora WHERE montadora='$cod_montadora'";
  $conn->query($sql);
  echo "<h4>Montadora excluida com sucesso</h4>
  <h3><a href='http://localhost/locadora_m31'>Voltar</a></h3>";
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
</fieldset></div></div></body></html>
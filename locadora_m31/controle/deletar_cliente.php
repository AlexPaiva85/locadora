<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Cadastro de cliente</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("conexao.php");
try{
    $cod_cliente = $_POST['cmb_cliente'];
    $sql = "DELETE FROM cliente WHERE cod_cliente='$cod_cliente'";
    $conn->query($sql);
    echo "<h4>cliente excluido com sucesso</h4>
    <h3><a href='http://localhost/locadora_m31/'>Voltar</a></h3>";
}catch(PDOException $ex){
        echo 'Erro '. $ex->getMessage();
    }
?>
</fieldset></div></div></body></html>
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
<h1>Atualização de cliente</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/atualizar_cliente.php">
	<label>Escolha o cliente a ser modificado:</label>
    <?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM cliente';
  print "<select name='cod_cliente'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_cliente']."'>".$row['cliente']." - ".$row['cpf']."</option>";
  }
  print "</select>";
}catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?>
    <br><label>Digite um novo nome para o cliente:</label><br>
	<input type="text" name="txt_cliente">
    <br><label>Digite um novo cpf para o cliente:</label><br>
    <input type="text" name="txt_cpf">
    <br><label>Selecione um novo bairro para o cliente:</label><br>
    <?php
    include ("../controle/conexao.php");
    try{
        $sql = 'SELECT * FROM bairro';
        print "<select name='cmb_bairro'>";
        foreach ($conn->query($sql) as $row) {
          print "<option value='".$row['cod_bairro']."'>".$row['bairro']."</option>";
        }
        print "</select>";
      }catch(PDOException $ex){
          echo 'Erro '. $ex->getMessage();
    }
    ?>
        <input type="submit" value="Atualizar">
</fieldset></form></div></div></body></html>
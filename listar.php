<?php

include ("conexao.php");

$sql = "select * from imovel";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listra.css">
    <title> Listar </title>
<body>
<div id="corpo">

<div id="header">
<br> <br> <br> <center>
<a href="index.html"> <img src="img/logo.png" height="80"> </a>
<a href="index.html" style="text-decoration: none; color: white;"> <h1> Imobiliária </h1> </a>
</center>
</div>
​
<table id="tabela">
<tr>
<td> <b> Tipo: </b></td>
<td><b>Situação:</b></td>
<td><b>Valor:</b></td>
<td><b>Bairro:</b></td>
<td><b>Descrição:</b></td>
</tr>

<!--
<p><p>
<table class="minimalistBlack">
<thead>
<tr>
<th>Tipo</th>
<th>Situação</th>
<th>Valor</th>
<th>Bairro</th>
<th>Descrição</th>
</tr>
</thead>-->


<?php
$result=mysqli_query($conn,$sql);
while($tabela=mysqli_fetch_array($result))
{
$tipo = $tabela["tipo"];
$situacao = $tabela["situacao"];
$valor = $tabela["valor"];
$bairro = $tabela["bairro"];
$descricao = $tabela["descricao"];

echo "<tr>";
echo "<td>$tipo</td>";
echo "<td>$situacao</td>";
echo "<td>$valor</td>";
echo "<td>$bairro</td>";
echo "<td>$descricao</td>";
}
?>
</table>
</div>

</body>
</html>

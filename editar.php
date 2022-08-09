<?php
include("conexao.php");

$codigo = $_POST['codigo'];
$sql = "Select * from imovel where codigo='$codigo'";
$query = mysqli_query($conn, $sql) or die ("Erro ao carregar imóvel");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="estilo.css">
<title> Imobiliária </title>
</head>

<div id="corpo">
<div id="header">
<br> <br> <br> <center>
<a href="index.html"> <img src="img/logo.png" height="80"> </a>
<a href="index.html" style="text-decoration: none; color: white;"> <h1> Imobiliária </h1> </a>
</center>
</div>

<?php
while($linha = mysqli_fetch_assoc($query)){?>

<form id="pesquisa" action="deletar.php" method="post">
<div></div>
<div class="txt">
<img src="img/padlock.png" class="icons">
<input type="text" name="codigo" value="<?php echo $linha['codigo']?>" class="texto" placeholder="Código" maxlength="10" required style="width: 61.5%">
<button type="submit" name="btn_pesquisa" id="btn_pesquisa"> <img src="img/delete.png" class="icons"> </button>
</div>
</form>

<form id="cadastro" action="atualizar.php" method="post">
<div></div>
<input type="hidden" name="codigo" value="<?php echo $linha['codigo']?>">
<div class="txt">
<img src="img/house.png" class="icons">
<input type="text" name="tipo" value="<?php echo $linha['tipo']?>" class="texto" placeholder="Tipo" maxlength="20" required>
</div>
<div></div>
<div class="txt">
<img src="img/land.png" class="icons">
<input type="text" name="situacao" value="<?php echo $linha['situacao']?>" class="texto" placeholder="Situação" maxlength="45" required>
</div>
<div></div>
<div class="txt">
<img src="img/money.png" class="icons">
<input type="text" name="valor" value="<?php echo $linha['valor']?>" class="texto" placeholder="Valor" required>
</div>
<div></div>
<div class="txt">
<img src="img/city.png" class="icons">
<input type="text" name="bairro" value="<?php echo $linha['bairro']?>" class="texto" placeholder="Bairro" maxlength="20" required>
</div>
<div></div>
<div class="txt">
<img src="img/paper.png" class="icons">
<input type="text" name="descricao" value="<?php echo $linha['descricao']?>" class="texto" placeholder="Descrição">
</div>
<div></div>
<div>
<button type="submit" class="btn"> Atualizar </button>
</div>

</form>
</div>

<?php }?>
</body>
</html>

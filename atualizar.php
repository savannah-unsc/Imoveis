<?php
include_once("conexao.php");

$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];
$situacao = $_POST['situacao'];
$valor = $_POST['valor'];
$bairro = $_POST['bairro'];
$descricao = $_POST['descricao'];

$sql = "UPDATE imovel set tipo='$tipo', situacao='$situacao', valor='$valor', bairro='$bairro', descricao='$descricao' where codigo='$codigo'";
$query = mysqli_query($conn, $sql) or die ("Erro ao atualizar imóvel");

if (mysqli_affected_rows($conn)){
echo "<script> window.alert('Imóvel cadastrado com sucesso') </script>";
echo "<script> location.href='index.html'</script>";
}
else{
echo "<script> window.alert('Erro ao cadastrar imóvel') </script>";
//echo "<script> location.href='index.html'</script>";
}
?>

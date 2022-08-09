<?php
include_once("conexao.php");

$codigo = $_POST['codigo'];

$sql = "DELETE FROM imovel where codigo='$codigo'";
$query = mysqli_query($conn, $sql) or die ("Erro ao excluir imóvel");

if (mysqli_affected_rows($conn)){
echo "<script> window.alert('Imóvel excluido com sucesso') </script>";
echo "<script> location.href='index.html'</script>";
}
else{
echo "<script> window.alert('Erro ao excluir imóvel') </script>";
echo "<script> location.href='index.html'</script>";
}
?>

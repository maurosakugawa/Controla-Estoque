<?php
include_once ('conexao.php');
$id = $_POST['idProduto'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

$sql = "UPDATE estoque SET descricao = '$descricao', quantidade = '$quantidade', valor = '$valor' WHERE IdProduto = $id";
$update = mysqli_query($conexao,$sql);

if($update){
    header("Location: listar_produtos.php?atualizado=".$id); 
} ?>
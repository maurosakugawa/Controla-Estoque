<?php
include_once ('conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo'];

$sql = "UPDATE usuario SET Nome = '$nome', Sobrenome = '$sobrenome', Email = '$email', Senha = '$senha', NivelUsuario = '$cargo'
        WHERE IdUsuario = '$id' LIMIT 1";

$update = mysqli_query($conexao,$sql);
if($update){
    header("Location: listar_usuario.php?atualizado=".$id); 
}
?>
<?php
include_once ('conexao.php');

if(isset($_POST['idUser']) && isset($_POST['nivelUser'])){
    $id = $_POST['idUser'];
    $nivel = $_POST['nivelUsuario'];
}
$delete = "";
// $update = "";
if(isset($_GET['reprovar'])){
    $id = $_GET['id'];
    echo $sql = "DELETE FROM usuario WHERE IdUsuario = $id ";
    $delete = mysqli_query($conexao, $sql);
}

if($delete != ""){
    header("Location: listar_usuario.php?excluido=".$id); 
}

// if(isset($_POST['idUser']) && isset($_POST['nivelUser'])){
//     $id = $_POST['idUser'];
//     $nome = $_POST['Nome'];
//     $sobrenome = $_POST['Sobrenome'];
//     $email = $_POST['Email'];
//     $senha = $_POST['Senha'];
//     $nivelUser = $_POST['nivelUsuario'];
// }
// $delete = "";
// if(isset($_GET['reprovar'])){
//     $id = $_GET['id'];
//     echo $sql = "DELETE FROM usuario WHERE IdUsuario = $id ";
//     $delete = mysqli_query($conexao, $sql);
// }

// if($delete != ""){
//     header("Location: listar_usuario.php?excluido=".$id); 
// }


 
// else {
//     $sql = "UPDATE usuario SET status = 'Ativo', NivelUsuario = $nivel WHERE IdUsuario = $id ";
//     $update = mysqli_query($conexao, $sql);
// }
// if($update != ""){
//     header("Location: aprovar_usuario.php?atualizado=".$id); 
// }

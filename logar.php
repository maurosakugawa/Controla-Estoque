<?php
session_start();
include_once('conexao.php');

$emailUsuario = trim($_POST['usuario']);
$senhaDigitada = trim($_POST['senha']);

$sql = "SELECT Email, Senha, IdUsuario FROM usuario WHERE Email = '$emailUsuario'";
$retornoEmailUsuario = mysqli_query($conexao,$sql);
$totalRetornado = mysqli_num_rows($retornoEmailUsuario);

if($totalRetornado == 0){
    header("Location: index.php?semCadastro=".$emailUsuario); 
}
if($totalRetornado >= 2){
    header("Location: index.php?emailCadastrado=".$emailUsuario); 
}
if($totalRetornado == 1){
    while($array = mysqli_fetch_array($retornoEmailUsuario,MYSQLI_ASSOC)){
        $senhaCadastrada = $array['Senha'];
        if($senhaDigitada == $senhaCadastrada){
            $_SESSION['usuario'] = $array["IdUsuario"];
            header("Location: home.php"); 
        } else{
            header("Location: index.php?dadosInvalidos=1"); 
        }
    }
}

?>
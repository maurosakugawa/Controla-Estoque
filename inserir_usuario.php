<?php
include_once ('conexao.php');

$nome = trim($_POST["nome"]);
$sobrenome = trim($_POST["sobrenome"]);
$email = trim($_POST["email"]);
$senha = trim($_POST["senha"]);
$nivelUsuario = trim($_POST["nivelUsuario"]);

$sql = "INSERT INTO `usuario` (`Nome`, `Sobrenome`, `Email`, `Senha`, `NivelUsuario`) VALUES " .
    "('$nome', '$sobrenome','$email', '$senha', '$nivelUsuario')";
$inserir = mysqli_query($conexao, $sql);
?>

<?php include_once ('head.php'); ?>
<div class="container pad-20-mwid-800">
    <h4>Usuário <b><?=$nome .' '.$sobrenome?></b> Cadastrado com sucesso!</h4>
    <a class="btn btn-sm btn-primary" role="button" href="cadastrar_usuario.php">Voltar para o cadastro de usuário</a>
</div>
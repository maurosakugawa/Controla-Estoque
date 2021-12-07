<?php 
include_once ('conexao.php');
include_once ('validacao.php'); 
?>
<!DOCTYPE html>
<?php include_once ('head.php'); ?>
<title>Atualizar Usuário</title>
<body>
<?php include_once 'menu.php';?>
<div style="padding:20px 0" class="container">
    <h3 style="margin-bottom:30px">Lista de Usuários</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Senha</th>
                <th scope="col">Nivel</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
<?php
$sql = "SELECT * FROM `usuario`";
$retorno = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
    $idUser = $array['IdUsuario'];
    $nome = $array['Nome'];
    $sobrenome = $array['Sobrenome'];
    $email = $array['Email'];
    $senha = $array['Senha'];
    $nivelUser = $array['NivelUsuario'];
    switch ($nivel) {
        case 1:
            $nivel = "Usuário";
            break;
        case 2:
            $nivel = "Administrador";
            break;
    }
    $id = $array['IdUsuario'];
    ?>
    <tr>
        <td><?php echo $idUser?></td>
        <td><?php echo $nome?></td>
        <td><?php echo $sobrenome?></td>
        <td><?php echo $email?></td>
        <td><?php echo $senha?></td>
        <td><?php echo $nivelUser?></td>
        <td><form action="" method="POST">
            <a type="submit" class="btn-editar btn btn-sm btn-primary"
            href="editar_cadastro.php?id=<?php echo $id ?>" role="button">
            <i class="far fa-edit"></i>Editar</a>
            <a class="btn-editar btn btn-sm btn-danger"
            href="delete_user.php?id=<?php echo $idUser ?>&reprovar=1" role="button">
            <i class="far fa-trash-alt"></i> Excluir</a>
        </td>
        </form>
    </tr>
    <?php }?>
    </tbody>
</table>

<?php
if (isset($_GET['atualizado'])) {
    echo '<div id="alerta" class="alert alert-success" role="alert">
        Usuário <b>' . $_GET['atualizado'] . '</b> aprovado com sucesso!.
    </div>';
}
if (isset($_GET['excluido'])) {
    echo '<div id="alerta" class="alert alert-danger" role="alert">
    Usuário <b>' . $_GET['excluido'] . '</b> excluido com sucesso!.
    </div>';
} ?>
    </div>
<?php include_once ('footer.php'); ?>
</body>
</html>
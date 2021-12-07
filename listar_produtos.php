<?php 
include_once ('validacao.php'); 
?>
<!DOCTYPE html>
<?php include_once ('head.php'); ?>
<title>Lista de Produtos</title>
<body>
    <?php include_once 'menu-user.php';?>
    <div style="padding:20px 0" class="container">
        <h3 style="margin-bottom:30px">Lista de Produtos</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data Cadastro</th>
                    <th scope="col">Usuário Resposável</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
<?php
$user_id = (int) $_SESSION['usuario'];

$sql = 'SELECT * FROM `estoque`';
// $sql = 'SELECT * FROM `estoque` WHERE user = $user_id';
$retorno = mysqli_query($conexao, $sql);
while ($array = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
    $idProduto = $array['IdProduto'];
    $usuario = $array['user'];
    $cadastro = $array['cadastro'];
    $descricao = $array['descricao'];
    $price = $array['valor'];
    $quantidade = $array['quantidade'];
    if ($user_id == $array['user']) { 
    ?>
    <tr>
        <td><?php echo $idProduto?></td>
        <td><?php echo $descricao?></td>
        <td><?php echo $cadastro?></td>
        <td><?php echo $usuario?></td>
        <td><?php echo $quantidade?></td>
        <td><?php echo $price?></td>
        <td>
        <?php if (($nivel == 1) || ($nivel == 2)) {?>
            <a class="btn-editar btn btn-sm btn-warning" href="editar_produto.php?id=<?php echo $idProduto?>"
                role="button"><i class="far fa-edit"></i> Editar</a>
            
            <a class="btn-editar btn btn-sm btn-danger" href="excluir_produto.php?id=<?php echo $idProduto?>"
                role="button"><i class="far fa-trash-alt"></i> Excluir</a></td>
        <?php } 
    } 
}?>
    </tr>
    </tbody>
</table>
<?php
if (isset($_GET['atualizado'])) {
    echo '<div id="alerta" class="alert alert-success" role="alert">
        Produto <b>' . $_GET['atualizado'] . '</b> atualizado com sucesso!.
    </div>';
}
if (isset($_GET['excluido'])) {
    echo '<div id="alerta" class="alert alert-danger" role="alert">
        Produto <b>' . $_GET['excluido'] . '</b> excluido com sucesso!.
    </div>';
}
if (isset($_GET['cadastrado'])) {
    echo '<div id="alerta" class="alert alert-success" role="alert">
        Produto cadastrado com sucesso!.
    </div>';
} ?>
</div>
<?php include_once ('footer.php')?>
</body>

</html>
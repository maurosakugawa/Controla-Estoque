<?php
include_once ('conexao.php');
include_once ('validacao.php'); 
?>
<!DOCTYPE html>
<?php include_once ('head.php'); ?>
<body>
<div class="container pad-20-mwid-800">
    <h4 style="padding:0 0 20px 0;margin-bottom:35px;" class="border-bottom">Formulário de Cadastro de Produto</h4>
    <form action="atualizar_produto.php" method="POST">
        <?php
        $id = $_GET['id'];
            $sql = "SELECT * FROM estoque WHERE IdProduto = $id";
            $retorno = mysqli_query($conexao,$sql);

            while($array = mysqli_fetch_array($retorno,MYSQLI_ASSOC)){
                $idProduto = $array['IdProduto'];
                $user = $array['user'];
                $descricao = $array['descricao'];
                $quantidade = $array['quantidade'];           
                $valor = $array['valor'];
                
        ?>
        <input style="display:none" id="idProduto" name="idProduto" value="<?php echo $idProduto?>">

        <div class="form-group">
            <label for="descricao">Descricao</label>
            <input type="text" class="form-control" id="descricao" name="descricao"
                placeholder="Digite o nome do produto" autocomplete="off" value="<?php echo $descricao?>">
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="Quantidade" name="quantidade"
                placeholder="Digite o nome do produto" autocomplete="off" value="<?php echo $quantidade?>">
        </div>

        <div class="form-group">
            <label for="valor">Valor do Produto</label>
            <input type="text" class="form-control" id="valor" placeholder="Digite o valor do produto" name="valor" required autocomplete="off" value="<?php echo $valor?>" >
        </div>

        <div class="form-group">
            
            <input type="hidden" class="form-control" id="user" name="user" value="<?php echo $user?>" >
        </div>
        <button type="submit" class="btn-enviar btn btn-primary btn-sm btn-block">Atualizar</button>
        <?php } ?>
    </form>
</div>
    
    <?php include_once('footer.php') ?>
</body>

</html>
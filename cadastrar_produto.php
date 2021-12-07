<?php include_once ('validacao.php'); ?>
<!DOCTYPE html>
<?php include_once ('head.php'); ?>
<title>Cadastro de Produto</title>
<body>
<?php include_once('menu-user.php'); ?>
    <div class="container pad-20-mwid-800">
        <h4 class="border-bottom pad20-marg35">Cadastro de Produto</h4>
        <form action="inserir_produto.php" method="POST">
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao"
                    placeholder="Descrição" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade"
                    placeholder="Quantidade" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" id="valor" placeholder="Digite o valor do produto" name="valor" >
            </div>
            <button type="submit" class="btn-enviar btn btn-success btn-sm btn-block">Cadastrar</button>
        </form>
    </div>
<?php include_once('footer.php') ?>
</body>
</html>
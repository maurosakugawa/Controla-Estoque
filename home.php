<?php include_once ('validacao.php'); ?>
<!DOCTYPE html>
<?php include_once ('head.php'); ?>
<title>Gerenciamento de Produtos</title>
<body>
<div style="padding:20px 0" class="container">
    <div class="row">
<?php
if (($nivel == 1) || ($nivel == 2)) { ?> <!--Nível geral Usuário e ADM -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-plus-circle"></i> Adicionar Produto</h5>
                    <p class="card-text">Cadastre novos produtos no estoque.</p>
                    <a href="cadastrar_produto.php" class="btn btn-primary">Cadastrar produto</a>
                </div>
            </div>
        </div> 
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-newspaper"></i> Lista de Produtos</h5>
                    <p class="card-text">Visualizar, editar ou excluir os produtos.</p>
                    <a href="listar_produtos.php" class="btn btn-primary">Ver Produtos</a>
                </div>
            </div>
        </div>
    </div>
<?php }?>    
<br>
<div class="row">
<?php
if ($nivel == 2) {?> <!-- Nível Administrador -->
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-truck-moving"></i> Cadastrar Usuário</h5>
                <p class="card-text">Cadastre um novo usuário no sistema.</p>
                <a href="cadastrar_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
            </div>
        </div>
    </div>  
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-truck-moving"></i> Listar Usuários</h5>
                <p class="card-text">Lista usuários cadastrados no sistema.</p>
                <a href="listar_usuario.php" class="btn btn-primary">Listar Usuários</a>
            </div>
        </div>
    </div>
</div> <?php } ?>
</div>
</body>
</html>
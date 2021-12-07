<!DOCTYPE html>
<?php include_once ('head.php'); ?>
<title>Login</title>
<body>
    <div class="container box-position">
        <form action="logar.php" method="POST">
            <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" type="email" name="usuario" placeholder="Digite o e-mail do usuário" autocomplete="off" />
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" autocomplete="off" />
            </div>
            <button type="submit" class="btn btn-success btn-sm btn-block">Entrar</button>
        </form>
    </div>
<?php include_once('footer.php'); ?>
</body>
</html>
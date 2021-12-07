<?php include_once ('validacao.php'); ?>
<!DOCTYPE html>
<?php include_once ('head.php'); ?>
<title>Cadastro de usuário</title>
<body>
<?php include_once ('menu.php');?>
    <div class="container pad-20-mwid-800">
        <form action="inserir_usuario.php" method="POST">
            <h4 class="border-bottom pad20-marg35">Cadastro de usuário</h4>
            <div class="row"> 
            <div class="form-group col-md-6">
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="Digite o seu nome"
                    autocomplete="off" />
            </div>
            <div class="form-group col-md-6">
                <label>Sobrenome</label>
                <input class="form-control" type="text" name="sobrenome" placeholder="Digite o seu sobrenome" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>E-mail</label>
                <input class="form-control" type="email" name="email"
                    placeholder="Digite o seu e-mail para acessar o sistema" />
            </div>
            <div class="form-group col-md-6">
                <label>Nível de acesso</label>
                <select class="form-control" name="nivelUsuario">
                    <option value="1">Administrador</option>
                    <option value="2">Usuário</option>
                </select>
            </div>
        </div>
        <div class="row"> 
            <div class="form-group col-md-6">
                <label>Senha</label>
                <input class="form-control" type="password" id="senha" name="senha" placeholder="Digite uma senha" />
            </div>
            <div class="form-group col-md-6">
                <label>Repetir senha</label>
                <input class="form-control" type="password" id="senha2" name="senha2"
                    placeholder="Digite sua senha novamente" oninput="validaSenha(this)" />
                <small style="display:none" id="msg-erro">A senha precisa ser igual a senha digitada acima.</small>
            </div>
        </div>
            <button type="submit" class="btn btn-success btn-sm btn-block">Cadastrar</button>
        </form>
    </div>
    <?php include_once("footer.php"); ?>
    <script>
    function validaSenha(input) {
        if (input.value != document.getElementById('senha').value) {
            input.setCustomValidity('Repita a senha corretamente!');
            document.getElementById('msg-erro').style.display = "block"
        } else {
            input.setCustomValidity('');
            document.getElementById('msg-erro').style.display = "none"
        }
    }
    </script>
</body>

</html>
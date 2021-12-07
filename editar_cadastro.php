<?php 
include_once ('conexao.php');
include_once ('validacao.php'); 
?>
<!DOCTYPE html>
<?php include_once ('head.php'); ?>

<div class="container pad-20-mwid-800">
    <h4 class="border-bottom pad20-marg35">Formulário de Edição de Usuários</h4>
    <form action="update_user.php" method="POST">
        <?php
            $id = 0;
            $id = $_GET['id'];
            $sql = "SELECT * FROM usuario WHERE IdUsuario = '$id' LIMIT 1";
            $retorno = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));;

           while($array = mysqli_fetch_array($retorno,MYSQLI_ASSOC)){
            $id = $array['IdUsuario'];
            $nome = $array['Nome'];
            $sobrenome = $array['Sobrenome'];
            $email = $array['Email'];
            $senha = $array['Senha'];
            $cargo = $array['NivelUsuario'];               
            }
        ?>
        <input style="display:none" id="id" name="id" value="<?=$id?>">
        <div class="form-group">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome"
                name="nome" required autocomplete="off" value="<?php echo $nome ?>" >
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                placeholder="Sobrenome" autocomplete="off" value="<?php echo $sobrenome ?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email"
                placeholder="Email" autocomplete="off" value="<?php echo $email ?>">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="text" class="form-control" id="senha" name="senha"
                placeholder="Senha" autocomplete="off" value="<?php echo $senha ?>">
        </div>

        <div class="form-group">
            <label for="fornecedor">Cargo</label>
            <select class="form-control" id="cargo" name="cargo">
                <option value="1" <?php if($cargo == '1'){ echo'selected';}?>>Usuário</option>
                <option value="2" <?php if($cargo == '2'){ echo'selected';}?>>Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn-enviar btn btn-primary btn-sm btn-block">Atualizar</button>
    </form>
</div>
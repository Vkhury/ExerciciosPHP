<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Alterar Cadastro de: <b><?php echo $user['nome'] ?></b>
                <?php else: ?>
                    Criar novo Cadastro
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data" action="">
                <div class="form-group">
                    <label>Nome</label>
                    <input name="nome" value="<?php echo $user['nome'] ?>"
                         class="form-control <?php echo $errors['nome'] ? 'não encontrado' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['nome'] ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>E-mail</label>
                    <input name="email" value="<?php echo $user['email'] ?>"
                           class="form-control  <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['email'] ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" value="<?php echo $user['senha'] ?>"
                           class="form-control  <?php echo $errors['senha'] ? 'invalida' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['senha'] ?>
                    </div>
                </div>

                <button class="btn btn-success">Enviar</button>
                <a class="btn btn-danger" href="view.php?id=<?php echo $user['id'] ?>">Cancelar</a>

            </form>
        </div>
    </div>
</div>

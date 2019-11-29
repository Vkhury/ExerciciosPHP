<?php
require 'users/users.php';

$users = getUsers();

include 'partials/header.php';
?>


<div class="container">
    <p>
        <a class="btn btn-success btn-lg" href="create.php"><b>Novo Cadastro</b></a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            
        </tr>
        </thead>

        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>

                <td><?php echo $user['nome'] ?></td>
                <td><?php echo $user['email'] ?></td>
 

              <td>
                    <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">Cadastro</a>
                    <a href="update.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Alterar</a>
                    <form method="POST" action="delete.php" style="display: inline-block">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Apagar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>


<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "partials/not_found.php";
    exit;
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Usuario: <b><?php echo $user['nome'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">A l t e r a r</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">A p a g a r</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Nome:</th>
                <td><?php echo $user['nome'] ?></td>
            </tr>
            <tr>
                <th>E-mail:</th>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <th>Senha:</th>
                <td><?php echo $user['senha'] ?></td>
            </tr>

            </tbody>
        </table>
    </div>
    <a class="btn btn-warning btn-sm btn-block" href="index.php?"><b>V o l t a r</b></a>
</div>



<?php include 'partials/footer.php' ?>

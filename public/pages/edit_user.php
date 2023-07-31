<?= getFlash('message'); ?>
<?php
$user = find('users', 'id', $_GET['id']);

?>
<h2>Editar Usuário</h2>

<form action="/pages/forms/edit_user.php" method="post">

    <div class="form-group">
        <label for="nome" class="mt-2">Nome</label>
        <input type="text" class="form-control" name="nome" id="" value="<?= $user->nome ?>">
        <input type="hidden" name="id" value="<?= $user->id ?>">

    </div>
    <div class="form-group">
        <label for="sobrenome" class="mt-2">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" id="" value="<?= $user->sobrenome ?>">

    </div>
    <div class="form-group">
        <label for="email" class="mt-2">Email</label>
        <input type="email" class="form-control" name="email" id="" value="<?= $user->email ?>">

    </div>
    

        <button type="submit" class="btn btn-sm btn-primary mt-3">Editar</button>

</form>
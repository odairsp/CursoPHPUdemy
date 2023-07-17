<?= getFlash('message'); ?>

<form action="/pages/forms/update_user.php" method="post">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="" placeholder="">

    </div>
    <div class="form-group">
        <label for="sobrenome">Sobrenome</label>
        <input type="email" class="form-control" name="sobrenome" id="" placeholder="">

    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="" placeholder="">

    </div>
    <div class="form-group">
        <label for="password"></label>
        <input type="password" class="form-control" name="password" id="" placeholder="">



        <button type="submit" class="btn btn-sm btn-primary">Editar</button>

</form>
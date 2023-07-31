<a href="?page=create_user" class="btn btn-sm btn-success">Cadastrar User</a>
<a href="?page=contato" class="btn btn-sm btn-success">Contato</a>

<h2>HOME</h2>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = all('users');
        foreach ($users as $user) :
        ?>
            <tr>
                <td scope="row"><?= $user->id ?></td>
                <td scope="row"><?= $user->nome ?></td>
                <td scope="row"><?= $user->email ?></td>
                <td scope="row"><a href="?page=edit_user&id=<?= $user->id ?>" class="btn btn-sm btn-success">Editar</a></td>
                <td scope="row"><a href="" class="btn btn-sm btn-danger">Deletar</a></td>

            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
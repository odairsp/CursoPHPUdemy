<?php

require "../../../bootstrap.php";



if (isEmptyRequest()) {

    flash('message', 'Preencha todos os campos');
    return redirect("edit_user");
}

$validate = validate([
    'id'=> 'i',
    'nome' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's'
]);

$cadastrado = update('users', $validate);

if ($cadastrado) {
    flash('message', 'Editado com sucesso!', 'success');
    return redirect("home");
}

flash('message', 'ERRO ao editar!');
redirect("edit_user");
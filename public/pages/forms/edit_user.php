<?php

require "../../../bootstrap.php";



if (isEmptyRequest()) {

    flash('message', 'Preencha todos os campos');
    return redirect("edit_user");
}

$validate = validate([
    'nome' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's'
]);

$cadastrado = update('users', $validate);

if ($cadastrado) {
    flash('message', 'Cadastrado com sucesso!', 'success');
    return redirect("home");
}

flash('message', 'ERRO ao cadastrar!');
redirect("edit_user");
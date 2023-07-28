<?php

require "../../../bootstrap.php";



if (isEmptyRequest()) {

    flash('message', 'Preencha todos os campos');
    return redirect("create_user");
}

$validate = validate([
    'nome' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's'
]);

$cadastrado = create('users', $validade);

if ($cadastrado) {
    flash('message', 'Cadastrado com sucesso!', 'success');
    return redirect("create_user");
}

flash('message', 'ERRO ao cadastrar!');
redirect("create_user");
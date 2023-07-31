<?php

require "../../../bootstrap.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmptyRequest()) {

    flash('message', 'Preencha todos os campos');
    return redirect("edit_user&id={$id}");
}

$validate = validate([
    'nome' => 's',
    'sobrenome' => 's',
    'email' => 'e'

]);

$atualizado = update('users', $validate, ['id', $id]);

if ($atualizado) {
    flash('message', 'Editado com sucesso!', 'success');
    return redirect("edit_user&id={$id}");
}

flash('message', 'ERRO ao editar!');
redirect("edit_user&id={$id}");

<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deletado = delete('users', 'id', $id);

if ($deletado) {
    flash('message', 'Deletado com sucesso!', 'success');
    return redirectHome();
}

flash('message', 'ERRO ao deletar!');
redirectHome();

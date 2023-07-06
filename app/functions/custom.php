<?php

function dd($dump)
{
    var_dump($dump);
    die();
}

// verifica na superglobal $SERVER se o REQUEST_METHOD é POST/GET e retorna a superglobal corespondente

function request()
{
    $request = $_SERVER['REQUEST_METHOD'];

    return ($request == 'POST') ? $_POST : $_GET;
}

function redirect($page){
    return header("location:/?page=".$page);
}

function redirectHome(){
    return header("location:/");
}
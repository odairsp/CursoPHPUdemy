<?php

//pega a superglobal $_GET/$_POST pelo metodo custom.php/request() e 
// valida campos contra codeInjection

function validate(array $fields)
{
    $request = request();
    $validate = [];
    foreach ($fields as $field => $type) {

        switch ($type) {
            case 's':
                $validate[$field] = htmlentities($request[$field], ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, "UTF-8");
                break;
            case 'i':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'e':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    return (object) $validate;
}

// pega a superglobal $_GET/$_POST pelo metodo custom.php/request() e verifica se alguma de suas posiçoes estão vazias
function isEmptyRequest()
{

    $request = request();
    $empty = false;
    foreach ($request as $key => $value) {
        if (empty($request[$key])) {
            $empty = true;
        }
    }
    return $empty;
}
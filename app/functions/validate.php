<?php

function validate(array $fields)
{
    $validate = array();
    foreach ($fields as $key => $type) {

        switch ($type) {
            case 's':
                $validate[$key] = filter_var($_POST[$key], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                break;
            case 'i':
                $validate[$key] = filter_var($_POST[$key], FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'e':
                $validate[$key] = filter_var($_POST[$key], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    return (object) $validate;
}
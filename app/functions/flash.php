<?php

function flash($key, $message, $type = 'danger')
{

    if (!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = "<span class='p-1 alert alert-" . $type . "'>" . $message . "</span>";
    }
}

function getFlash($key)
{
    if (isset($_SESSION['flash'][$key])) {

        $message = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }
}
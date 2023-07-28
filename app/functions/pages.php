<?php

// filtra a uri contra injeção de codigo e puxa a pagina a ser carregada 
// com url?page=pagina retorna pagina.php que vai dentro do index 

function load()
{

    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    if (!file_exists($page)) {
        throw new Exception("Página não existe!");
    }

    return $page;
}
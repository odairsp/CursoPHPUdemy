<?php
require "../../../bootstrap.php";

$validate = validate([
    'name' => 's',
    'email' => 'e',
]);

echo $validate->name;
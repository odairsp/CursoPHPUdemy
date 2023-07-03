<?php
include './test.php';

$variable = ['ola' => 3];

$const = get_defined_constants(true);

foreach ($const as $item) {
    print_r($item);
};
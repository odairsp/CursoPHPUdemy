<?php

function connect()
{
    $pdo = new \PDO("mysql:host=localhost;dbname=udemyphp;charset=utf8", 'root', '123456');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}
function create($table, $fields)
{

    $pdo = connect();

    if (!is_array($fields)) {
        $fields = (array) $fields;
    }

    $sql = "INSERT INTO {$table}";
    $sql += "(" . implode(',', array_keys($fields)) . ")";
    $sql += " VALUES(:" . implode(',:', array_values($fields)) . ")";

    $insert = $pdo->prepare($sql);
    return $insert->execute($fields);
}

function all($table)
{

    $pdo = connect();
    $sql = "SELECT * FROM {$table};";
    $list = $pdo->query($sql);
    $list->execute();
    return $list->fetchAll();
}

function update()
{
}
function find($table, $user)
{
    $pdo = connect();
    $sql = "SELECT * FROM {$table} WHERE ;";
    $list = $pdo->query($sql);
    $list->execute();

}

function delete()
{
}

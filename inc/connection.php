<?php
    $dsn = 'pgsql:host=localhost;dbname=db_teste';
    $username = 'postgres';
    $password = '123456';

    try {
        $con = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/err.php');
        exit();
    }
?>
<?php

    $dsn = "mysql:host=localhost;dbname=posti";
    $user = "root";
    $pass = "";

    try{
        $pdo = new PDO($dsn, $user, $pass);
    } catch(PDOException $e){
        echo 'error' . $e->getMessage();
    }

?>
<?php
    $server = "localhost";
    $database = "db_PedroCruz";
    $user = "root";
    $pass = "";

    $con = "mysql:host=$server;dbname=$database; charset=UTF8";

    try{
        $pdo = new PDO($con, $user, $pass);
    }
    catch (PDOException $e){
        $e->getMessage();
    }
?>
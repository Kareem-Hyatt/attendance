<?php

    //Development Connection

    // $host = 'localhost';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';

    //Remote Connection

    $host = '85.10.205.173:3306';
    $db = 'attendee_db';
    $user = 'kareem@localhost';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host = $host;dbname = $db; charset = $charset";

    try{
        $pdo = new pdo($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Database Connected Successfully';
    }
    catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>
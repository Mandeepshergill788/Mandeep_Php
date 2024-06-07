<?php
    session_start();
    $dsn = 'mysql:host=localhost;dbname=mshergilldb';
    $username = 'M.Shergill';
    $password = '3usiA92S';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $_SESSION["database_error"] = $e->getMessage();
        $url = "database_error.php";
        header("Location: " . $url);
        exit();
    }
?>
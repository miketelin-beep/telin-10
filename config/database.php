<?php

function getConnection(): PDO
{
    $host = "localhost";
    $dbname = "faculty_db";
    $username = "root";
    $password = "";

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}
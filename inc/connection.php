<?php

try {
    $hostname = "localhost";
    $port = 3306;
    $dbname = "articles";
    $username = "root";
    $pw = "password";
    $dbh = new PDO ("dblib:host=$hostname:$port;dbname=$dbname","$username","$pw");
} catch (PDOException $e) {
    echo "Unable to Connect";
    exit;
}
$stmt = $dbh->prepare("SELECT *
                       FROM articles
                       ORDER BY datePosted
                       LIMIT 3");
$stmt->execute();

try {
$articles = $stmt->fetchAll();
} catch (Exception $e) {
    echo "Unable to retrieve data";
    exit;
}
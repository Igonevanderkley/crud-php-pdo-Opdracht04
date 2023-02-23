<?php 
require 'config.php';

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    if ($pdo) {
        // echo "Jeeejjj!!";
    } else {
        echo "Neeeeee!!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "DELETE FROM Afspraak
        WHERE Id = :Id";

$statement = $pdo->prepare($sql);
$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);
$result = $statement->execute();

if ($result) {
    echo "siep sap seidert, record verwijderd!";
    header('Refresh:1; url=read.php');
} else {
    echo "oops!";
    header('Refresh:1; url=read.php');
}
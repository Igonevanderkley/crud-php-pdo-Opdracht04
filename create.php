<?php

require 'config.php';

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    if ($pdo) {
        echo "Er is een verbinding met de mysql-server";
    } else {
        echo "Er is een interne server-error, neem contact op met de beheerder";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "INSERT INTO Afspraak (
                        Id, 
                        Basiskleur1,
                        Basiskleur2,
                        Basiskleur3,
                        Basiskleur4,
                        Telefoonnummer,
                        Email,
                        Afspraakdatum,
                        Optie1,
                        Optie3,
                        Optie2,
                        Verzendtijd) 
        VALUES          (NULL,
                        :basiskleur1,
                        :basiskleur2,
                        :basiskleur3,
                        :basiskleur4,
                        :telefoonnummer,
                        :email,
                        :afspraakdatum,
                        :optie1,
                        :optie2,
                        :optie3,
                        :verzendtijd);";

$statement = $pdo->prepare($sql);
$statement->bindValue(':basiskleur1', $_POST['kleur1'], PDO::PARAM_STR);
$statement->bindvalue(':basiskleur2', $_POST['kleur2'], PDO::PARAM_STR);
$statement->bindValue(':basiskleur3', $_POST['kleur3'], PDO::PARAM_STR);
$statement->bindValue(':basiskleur4', $_POST['kleur4'], PDO::PARAM_STR);
$statement->bindValue(':telefoonnummer', $_POST['telnummer'], PDO::PARAM_STR);
$statement->bindValue(':email', $_POST['mail'], PDO::PARAM_STR);
$statement->bindValue(':afspraakdatum', $_POST['date'], PDO::PARAM_STR);
$statement->bindvalue(':optie1', $_POST['option1'], PDO::PARAM_STR);
$statement->bindValue(':optie2', $_POST['option2'], PDO::PARAM_STR);
$statement->bindValue(':optie3', $_POST['option3'], PDO::PARAM_STR);
$statement->bindValue(':verzendtijd', $_POST['send_time'], PDO::PARAM_STR);

$result = $statement->execute();

if ($result) {
    echo "Er is een nieuw record gemaakt in de database.";
    header('Refresh:2; url=read.php');
} else {
    echo "Er is geen nieuw record gemaakt.";
    header('Refresh:2; url=read.php');
}

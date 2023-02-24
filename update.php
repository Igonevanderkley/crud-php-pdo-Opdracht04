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

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    var_dump($_POST);

    try {
        $sql = "UPDATE Afspraak SET 
                Basiskleur1 = :basiskleur1,
                Basiskleur2 = :basiskleur2,
                Basiskleur3 = :basiskleur3,
                Basiskleur4 = :basiskleur4,
                Telefoonnummer = :telefoonnummer,
                Email = :email,
                Afspraakdatum = :afspraakdatum
                Behandeling = :behandeling
                Verzendtijd = :verzendtijd
            WHERE Id = :id";

        $statement = $pdo->prepare($sql);
        $statement->bindValue(':basiskleur1', $_POST['kleur1'], PDO::PARAM_STR);
        $statement->bindvalue(':basiskleur2', $_POST['kleur2'], PDO::PARAM_STR);
        $statement->bindValue(':basiskleur3', $_POST['kleur3'], PDO::PARAM_STR);
        $statement->bindValue(':basiskleur4', $_POST['kleur4'], PDO::PARAM_STR);
        $statement->bindValue(':telefoonnummer', $_POST['telnummer'], PDO::PARAM_STR);
        $statement->bindValue(':email', $_POST['mail'], PDO::PARAM_STR);
        $statement->bindValue(':afspraakdatum', $_POST['date'], PDO::PARAM_STR);
        $statement->bindValue(':behandeling', $_POST['option'], PDO::PARAM_STR);
        $statement->bindValue(':verzendtijd', $_POST['send_time'], PDO::PARAM_STR);
        
        $statement->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
        $statement->execute();

        //stuur gebruiker door naar read.php met een header(Refresh) functie;
        echo 'update voltooid';
        header('Refresh:3; url=read.php');

    } catch (PDOException $e) {
        echo 'Update niet voltooid';
        header('Refresh:3; url=read.php');
        echo $e->getMessage();
    }

    exit();
}

$sql = "SELECT Id, basiskleur1, basiskleur2, basiskleur3, basiskleur4, Telefoonnummer, Email, Afspraakdatum, Behandeling, Verzendtijd
 FROM Afspraak WHERE Id = :Id";

$statement = $pdo->prepare($sql);
$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);
$statement->execute();

$result = $statement->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">

    <title>PHP PDO CRUD</title>
</head>

<body>
    <h1>PHP PDO CRUD</h1>

    <form action="update.php" method="post">

        <label for="kleur1"></label><br>
        <input type="color" name="kleur1" id="kleur1" value="<?= $result->Basiskleur1; ?>"><br>
        <br>
        <label for="kleur2"></label><br>
        <input type="color" name="kleur2" id="kleur2" value="<?= $result->Basiskleur2; ?>"><br>
        <br>
        <label for="kleur3">label><br>
        <input type="color" name="kleur3" id="kleur3" value="<?= $result->Basiskleur3; ?>"><br>
        <br>
        <label for="kleur4"></label><br>
        <input type="color" name="kleur4" id="kleur4" value="<?= $result->Basiskleur4; ?>"><br>
        <br>
        <label for="telnummer">Telefoonnummer</label><br>
        <input type="tel" name="telnummer" id="telnummer" value="<?= $result->Telefoonnummer; ?>"><br>
        <br>
        <label for="mail">Email</label><br>
        <input type="email" name="mail" id="mail" value="<?= $result->Email; ?>"><br>
        <br>
        <label for="date">Afspraak datum:<br>
        <input type="date" name="date" id="ate" value="<?= $result->Afspraakdatum; ?>"><br>
        <br>



        
        <label for="option">Behandeling:</label><br>
        <input type="date" name="option" id="option" value="<?= $result->Behandeling; ?>"><br>
        <br>
    
    
        <input type="hidden" name="id" value="<?= $result->Id;?>">
        <br>
        <input type="submit" value="Send!">
    </form>

    <a href="read.php">read</a>



</body>

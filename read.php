<?php
require('config.php');

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

$sql = "SELECT * FROM Afspraak";

$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ);

$rows = "";
foreach ($result as $info) {
    $rows .= "<tr>
                    <td>$info->Id</td>
                    <td>$info->Basiskleur1</td>
                    <td>$info->Basiskleur2</td>
                    <td>$info->Basiskleur3</td>
                    <td>$info->Basiskleur4</td>
                    <td>$info->Telefoonnummer</td>
                    <td>$info->Email</td>
                    <td>$info->Afspraakdatum</td>
                    <td>$info->Optie1</td>
                    <td>$info->Optie2</td>
                    <td>$info->Optie3</td>
                    <td>$info->Verzendtijd</td>

                    <td>
                    <a href='delete.php?Id=$info->Id'>
                        <img src='img/b_drop.png' alt='kruis'>
                    </a>
                </td>
                <td>
                <a href='update.php?Id=$info->Id'>
                    <img src='img/b_edit.png' alt='potlood'>
                </a>
                    </td>
                    <tr>      
         ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>achtbanen</title>
</head>

<body>


    <h3>Persoonsgegevens</h3>

    <a href="index.php">
        <input type="button" value="Nieuw record">
    </a>
    <br>
    <br>
    <table border='1'>
        <thead>
            <th>Id</th>
            <th>Basiskleur1</th>
            <th>Basiskleur2</th>
            <th>Basiskleur3</th>
            <th>Basiskleur4</th>
            <th>Telefoonnummer</th>
            <th>Email</th>
            <th>Afspraakdatum</th>
            <th>optie1</th>
            <th>optie2</th>
            <th>optie3</th>
            <th></th>
            <th></th>
            <t /head>
        <tbody>
            <?= $rows ?>
        </tbody>
    </table>
</body>

</html>

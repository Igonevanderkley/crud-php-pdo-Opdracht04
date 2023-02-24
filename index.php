<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

        <h1>Bling Bling Nail Studio Chantal</h1>

        <form action="create.php" method="post">

            <label for="kleur1">Kies 4 basiskleuren voor uw nagels:</label><br>
            <input type="color" name="kleur1" id="kleur1">


            <label for="kleur2"></label><br>
            <input type="color" name="kleur2" id="kleur2">


            <label for="kleur3"></label><br>
            <input type="color" name="kleur3" id="kleur3">


            <label for="kleur4"></label><br>
            <input type="color" name="kleur4" id="kleur4">

            <br>

            <label for="telnummer">Uw telefoonnummer:</label><br>
            <input type="tel" name="telnummer" id="telnummer"><br>

            <label for="mail">Uw e-mailadres:</label><br>
            <input type="email" name="mail" id="mail"><br>

            <label for="date">Afspraak datum:</label><br>
            <input type="datetime-local" name="date" id="date"><br>

            <input type="checkbox" id="option1" name="option1" value="Nagelbijt arangement">
            <label for="option1"> Nagelbijt arrangement (termijnbetaling mogelijk) $180</label><br>

            <input type="checkbox" id="option2" name="option2" value="Luxe manicure">
            <label for="option2"> Luxe manicure (massage en handpakking) $30,00</label><br>

            <input type="checkbox" id="option3" name="option3" value="Nagelreparatie">
            <label for="option3"> Nagelreparatie per nagel (in eerste week gratis) $5,00</label><br><br>

            <input type="hidden" name="send_time" id="send_time">

            <input type="submit" value="Sla op">
            <input type="reset" value="Reset">

            <script>
                document.getElementById('send_time').value = new Date().toLocaleString();
            </script>



        </form>
    </body>

</html>
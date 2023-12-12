<!DOCTYPE html>
<html lang="de"> <!-- Webseitensprache auf deutsch, sonst nervt dich der Browser weil er immer alles übersetzen will -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <!-- Das ist der Name den der Tab im Browser später hat -->
</head>


<body>

    <div>

        <a href="index.php?page=start">Start</a> | <!-- div erzeugt einen container -->
        <a href="index.php?page=contacts">Kontakte</a> | <!-- a erzeugt einen Link -->
        <a href="index.php?page=projects">Projekte</a> | <!-- href legt das Ziel des Links fest -->
        <a href="index.php?page=legal">Impressum</a>

    </div>



    <?php
    require_once("werkzeug.php"); //Der Ordnung halber würde ich Holfsfunktionen irgendwo hinpacken wo sie nicht stören

    // Wenn man das so macht hast du den Vorteil das du die einzelnen Seiten immer noch bequem pflegen kannst aber übersichtlicher.

    if (isset($_GET['page']) and $_GET['page'] === 'contacts') {
        require("contacts.php");

    } else if (isset($_GET['page']) and $_GET['page'] === 'start') {
        require("start.php");

    } else if (isset($_GET['page']) and $_GET['page'] === 'projects') { //Kann man so machen ist aber nicht so optimal, besser wäre ...
        require("projects.php");

    } else if (holeGet("page") === 'legal') {  // Etwas nicer wenn du eine eigene Funktion hast um vom Get sachen zu holen. Siehe Werkzeugkasten.php
        require("legal.php");
    }


    ?>
</body>


</html>
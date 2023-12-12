<!DOCTYPE html>
<html lang="de">  <!-- Webseitensprache auf deutsch, sonst nervt dich der Browser weil er immer alles übersetzen will -->

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



    if (isset($_GET['page']) and $_GET['page'] === 'contacts') {
        require("contacts.php");

    } else if (isset($_GET['page']) and $_GET['page'] === 'start') {
        require("start.php");

    } else if (isset($_GET['page']) and $_GET['page'] === 'projects') {
        require("projects.php");

    } else if (isset($_GET['page']) and $_GET['page'] === 'legal') {
        require("legal.php");
    }


    ?>
</body>


</html>
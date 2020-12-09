<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2</title>
    <?php
    $couleur = "blue";
    echo "<style type='text/css'>
    body {
        background-color: $couleur;
        }
    </style>";
    ?>
</head>
<body>
    <?php
        $name = "Anthony";

        echo "<h1>Welcome $name</h1>";
    ?>
</body>
</html>
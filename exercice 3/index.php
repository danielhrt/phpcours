<?php
    $admin = false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excercice 3</title>
    <style type=text/css>
        p{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    if($admin){
        echo "bienvenue viens <a href=#>ici</a>";
    }
    else{
        echo "<p>erreur page réservé aux admins";
    }
    ?>
</body>
</html>
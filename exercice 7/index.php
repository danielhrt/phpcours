<?php
    $userinfos = ['username' => 'PikaGame', 'name' => 'Daniel', 'age' => '22 ans', 'city' => 'dijon', 'status' => 'étudiant']
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 7</title>
    <style type=text/css>
        span{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        echo ' Bienvenue <span>' . $userinfos['name'] . '</span> inscrit sous le pseudo <span>' . $userinfos['username'] . '</span> agé de <span>' . $userinfos['age'] . '</span> situé à <span>' . $userinfos['city'] . '</span> étant <span>'. $userinfos['status'] . '</span>';
    ?>
</body>
</html>
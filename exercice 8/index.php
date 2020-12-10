<?php
    $userInfos = [
        [
            'name' => 'Dan',
            'age' => '26',
            'city' => 'Paris'
        ],
        [
            'name' => 'Jean',
            'age' => '17',
            'city' => 'Lille'
        ],
        [
            'name' => 'Fred',
            'age' => '38',
            'city' => 'Tours'
        ],
        [
            'name' => 'Romain',
            'age' => '41',
            'city' => 'Nantes'
        ],
        [
            'name' => 'Lou',
            'age' => '22',
            'city' => 'Lyon'
        ],
    ];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 8</title>
</head>
<body>
    <?php
        foreach($userInfos as $value){
            echo '<pre>';
            echo '<h2>' . $userInfos['name'] . '</h2>';
            echo '</pre>';
        }
    ?>
</body>
</html>
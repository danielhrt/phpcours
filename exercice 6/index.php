<?php
    $names = ['Bob', 'Anthony', 'Jean', 'Max', 'Dan', 'Alex', 'Tom', 'Ben', 'Lea', 'Gwen'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 6</title>
</head>
<body> 
    <ul>
    <?php
        for($i = 0; count($names); $i++){
            echo '<li>' . $names[$i] . '</li>';
        };
    ?>
    </ul>
</body>
</html>
<?php
            $fruits = ['pomme', 'poire','fraise','orange','kiwi'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 9</title>
</head>
<body>
    <?php
        function print_rv2($element){
            echo "<pre>";
            echo print_r($element);
            echo "</pre>";
        }
        print_rv2($fruits);
    ?>
</body>
</html>
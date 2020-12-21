<?php
        $fichier = fopen('compteur.txt', 'r+');
        $compteur = fgets($fichier);
        $compteur++;
        fseek($fichier, 0);
        fwrite($fichier, $compteur);
        fclose($fichier);
        ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 22</title>
    <style>
        .visiteur{
            color: blue;
            border: 2px blue solid;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: white;
            margin: 0;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; color:red;">Bienvenue !</h1>
    <img src="img.jpg" alt="pikachu" style="width: 100%;">
    <?php
			echo '<p class="visiteur">Nombre de vue de cette page: ' . $compteur. '</p>';
		?>
</body>
</html>
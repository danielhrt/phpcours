<?php
        $fichier = fopen('compteur.txt', 'r+');
        $compteur = fgets($fichier);
        $compteur += 1;
        fseek($fichier, 0);
        fwrite($fichier, $compteur);
        fclose($fichier);
        ?>

     	<?php
			echo
              '<p class="visiteur">Nombre de vue de cette page: '. $compteur.'</p>';
		?>
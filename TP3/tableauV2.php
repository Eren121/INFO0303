<?php declare(strict_types=1); ?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" lang="fr">
		<title>Tableau V2</title>
		
		<style>
			td {
				border: 3px solid black;
			}
		</style>
	</head>
	
	<body>

		<?php

        function array_html($titres, $lignes) : void {

            echo '<table><tr>';

            $count_titres = count($titres);

            for($i = 0; $i < $count_titres; ++$i) {

                echo '<th>' . $titres[$i] . '</th>';
            }

            echo '</tr>';

            $taille = count($lignes);

            for($i = 0; $i < $taille; ++$i) {

                $ligne = $lignes[$i];

                echo '<tr>';

                for($j = 0; $j < $count_titres; ++$j) {

                    $valeur = $ligne[$titres[$j]] ?? '<em>Non spécifié</em>';

                    echo '<td>' . $valeur . '</td>';
                }

                echo '</tr>';
            }

            echo '</table>';
        }

        define("TITRES", array("Nom", "Prénom", "Age", "Genre", "Ville", "N° de carte bancaire"));
        define("TABLEAU", array(
            array(
                "Nom" => "Jean-Marc",
                "Prénom" => "Dupont",
                "Age" => 5,
                "Genre" => "Homme",
                "Ville" => "Paris"),
            array(
                "Nom" => "Lafolie",
                "Prénom" => "David",
                "Age" => "Vieux",
                "Ville" => "Reims",
                "N° de carte bancaire" => 6666),
            array(
                "Nom" => "Rabat",
                "Prénom" => "Cyril",
                "Age" => "Un certain âge",
                "Genre" => "Homme",
                "Ville" => "Reims, je crois",
                "N° de carte bancaire" => 6666),
        ));

        array_html(TITRES, TABLEAU);

		?>
	</body>
</html>
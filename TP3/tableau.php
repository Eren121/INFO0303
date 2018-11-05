<?php declare(strict_types=1); ?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" lang="fr">
		<title>Tableau</title>
		
		<style>
            td {
                border: 3px solid black;
            }
		</style>
	</head>
	
	<body>
		<?php

        function tableau2html($table) : void {

            $taille = count($table);

            echo '<table>';

            for($i = 0; $i < $taille; ++$i) {

                echo '<tr>';

                $taille2 = count($table[$i]);

                for($j = 0; $j < $taille2; ++$j) {

                    echo '<td>' . $table[$i][$j] . '</td>';
                }

                echo '</tr>';
            }

            echo '</table>';
        }

        define( "TABLEAU", array(
            array(11, 12, 13, 14, 15),
            array(21, 22, 23, 24),
            array(31, 32, 33, 34, 35)
        ));

        tableau2html(TABLEAU);

		?>
	</body>
</html>
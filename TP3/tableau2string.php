<?php declare(strict_types=1); ?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" lang="fr">
		<title>Tableau</title>
		
		<style>
			table td {
				border: 3px solid black;
			}
		</style>
	</head>
	
	<body>
		<?php

        function tableau2string(array $tableau, string $sep = ';' ) : string {

            $str = '';
            $taille = count($tableau);

            for ($i = 0; $i < $taille; $i++) {

                $str .= $tableau[$i];

                if ($i != $taille - 1){

                    $str .= $sep;
                }
            }

            return $str;
        }

		function string2tableau(string $str, string $sep = ';') : array {

		    $tableau = array();
		    $len = strlen($str);
		    $dernier = 0;

		    for($i = 0; $i < $len; ++$i) {

		        if($str[$i] == $sep) {

		            $tableau[] = substr($str, $dernier, $i - $dernier);
		            $dernier = $i + 1;
                }
            }

            if($len > 0 && $str[$len - 1] != $sep) {

                $tableau[] = substr($str, $dernier, $len - $dernier);
            }

            return $tableau;
        }

        define("TAB", array("JEAN", "MICHEL", "MARSEILLE"));
        define("TAB2", array("David", "Lafolie", "Reims"));

		$sep = "+";

		echo tableau2string (TAB, $sep) . '<br>';
		echo tableau2string (TAB2) . '<br>';

		var_dump(string2tableau("JEAN;MICHEL;LAFOLY"));

		var_dump(string2Tableau(tableau2String([0, 1, 2]))); //Identité
		?>
	</body>
</html>
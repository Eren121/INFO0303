<?php declare(strict_types=1); ?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" lang="fr">
		<title>Filtres</title>
	</head>

	<body>
		<?php
            function tableau_aleatoire(int $taille, int $min, int $max) : array {

                $tableau = array();

                for($i = 0; $i < $taille; ++$i) {

                    $tableau[] = rand($min, $max);
                }

                return $tableau;
            }

            function est_premier(int $n) : bool {

                if($n == 1) {

                    return false;
                }
                else if($n == 2) {

                    return true;
                }
                else if($n % 2 == 0) {

                    return false;
                }

                $sqrt = sqrt($n);

                for($i = 3; $i <= $sqrt; $i += 2) {

                    if($n % $i == 0) {

                        return false;
                    }
                }

                return true;
            }

            $tableau = tableau_aleatoire(100, 1, 200);
            $tableau = array_filter($tableau, "est_premier");
            sort($tableau);
            $tableau = array_slice($tableau, 0, 10);
            $tableau = array_unique($tableau);

            var_dump($tableau);
		?>
	</body>
</html>
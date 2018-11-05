<?php declare(strict_types=1);
/*foreach(['a', 'b', 'c'] as $i) { // Deuxième méthode avec le double dollar

    $value = $_POST[$i];

    if(isset($value) && is_numeric($value)) {
        $$i = (float)$value;
    }
    else {
        $a = 1;
    }
}*/
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" lang="fr">
    <title>Calcul</title>
</head>

    <body>
        <form action="calcul.php" method="post">
            <input type="number" name="a">
            <input type="number" name="b">
            <input type="number" name="c">
            <input type="submit">
        </form>
        <p>
        <?php


        function calcul($a, $b, $c) {

            $discriminant = $b * $b - 4 * $a * $c;

            if ($discriminant > 0) {

                $r1 = (-$b - sqrt($discriminant)) / (2 * $a);
                $r2 = (-$b + sqrt($discriminant)) / (2 * $a);

                return "Les solutions sont $r1 et $r2.<br>";

            } else if ($discriminant == 0) {

                $r = -$b / (2 * $a);
                return "<br>L'unique solution est $r";

            } else {

                $x1 = -$b / (2 * $a);
                $y1 = sqrt(-$discriminant) / (2 * $a);

                $x2 = -$b / (2 * $a);
                $y2 = -$y1;

                return "Les solutions sont $x1 + {$y1}i et $x2 + {$y2}i<br>";
            }
        }

        if(isset($_POST['a'])) { //Vérifier que le formulaire a bien été envoyé

            if(isset($_POST['a']) && is_numeric($_POST['a'])) {

                $a = (float)$_POST['a'];
            }
            else {

                $a = 1;
            }

            if(isset($_POST['b']) && is_numeric($_POST['b'])) {

                $b = (float)$_POST['b'];
            }
            else {

                $b = 0;
            }

            if(isset($_POST['c']) && is_numeric($_POST['c'])) {

                $c = (float)$_POST['c'];
            }
            else {

                $c = 0;
            }

            echo calcul($a, $b, $c);
        }

        ?>
        </p>
        <p>
            <a href="index.html">Retour</a>
        </p>
    </body>
</html>
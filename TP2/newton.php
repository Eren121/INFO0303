<?php declare(strict_types=1); ?>

<!doctype html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Newton</title>
    </head>
    <body>
    <form action="newton.php" method="post">
        <input type="number" name="a">
        <input type="submit">
    </form>

    <?php

    function racine_carree($a) {

        $x = $a;

        for($n = 0; $n < 10; $n++) {

            $x = ($x + $a / $x) * 1 / 2;
        }

        return $x;
    }

    if(isset($_POST['a'])) {

        echo racine_carree($_POST['a']);
    }
    ?>
    </body>
</html>
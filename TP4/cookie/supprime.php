<?php
setCookie('expiration', '', time() - 3600);
?>

<!doctype html>
    <html>
        <head>
            <title>Cookie index</title>
        </head>
    <body>
        <nav>
            <a href="index.php">Acceuil</a><br>
            <a href="etat.php">Etat</a>
        </nav>
        <p>Cookie supprimé.</p>
    </body>
</html>

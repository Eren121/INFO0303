<?php
function etatCookie() : void {

    if(isset($_COOKIE['expiration'])) {

        echo 'Le cookie existe<br>';
        echo 'Il reste ' . ($_COOKIE['expiration'] - time()) . ' secondes';
    }
    else {

        echo 'Le cookie n\'existe pas';
    }
}
?>

<!doctype html>
<html>
    <head>
        <title>Cookie état</title>
    </head>
    <body>
        <nav>
            <a href="index.php">Acceuil</a><br>
            <a href="supprime.php">Supprime</a>
        </nav>
        <p><?php etatCookie(); ?></p>
        <script>
            var seconde = <?php echo ($_COOKIE['expiration'] ?? 0) - time(); ?>;

            if(seconde > 0) {

                var id = setInterval(function () {

                    seconde--;

                    if (seconde === 0) {
                        document.querySelector('p').innerHTML += '<br>Cookie supprimé!';
                        clearInterval(id);
                    }
                    else {
                        document.querySelector('p').innerHTML += '<br>' + seconde;
                    }
                }, 1000);
            }
        </script>
    </body>
</html>

<?php

//Récupérer le temps d'expiration du cookie
if(!empty($_COOKIE['expiration'])) {
    $deja_venu = true;
}
else {
    $deja_venu = false;
}

//Enregistrer le cookie
$t = time()+10;
setCookie('expiration', $t, $t);

function affiche() {

    if($GLOBALS['deja_venu']) {

        echo 'Je vous connais';
    }
    else {

        echo 'Je ne vous connaissais pas, mais maintenant si !';
    }
}
?>


<!doctype html>
<html>
    <head>
        <title>Cookie index</title>
    </head>
    <body>
        <nav>
            <a href="etat.php">Etat</a><br>
            <a href="supprime.php">Supprime</a>
        </nav>
        <p><?php affiche(); ?></p>
        <script>
            var seconde = <?php echo $t - time(); ?>;

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

<?php
include "autoload.php";

?>
<!doctype html>
<html>
    <head>
        <title>POO en PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php

    $form = new Form("connexion", "traitement.php", Form::MODE_GET);
    $inputPseudo = new FormFieldInput("pseudo", "pseudo", "Votre pseudo :", FormFieldInput::TYPE_TEXT, "Kévin");
    $inputMdp = new FormFieldInput("mdp", "mdp", "Votre mot de passe :", FormFieldInput::TYPE_PASSWORD);
    $inputEnvoyer = new FormFieldButton('valider', 'submit', 'Valider', FormFieldButton::TYPE_SUBMIT);

    $form->addField($inputPseudo);
    $form->addField($inputMdp);
    $form->addField($inputEnvoyer);

    echo $form;

    ?>
    </body>
</html>
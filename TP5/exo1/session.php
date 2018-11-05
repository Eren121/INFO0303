<?php
include "Message.php";
session_start();

define("PSEUDO", "Cyril_Rabat");
define("MDP", "1234");
$log = (isset($_SESSION["log"]) || connexionOK()) && !deconnexion();

if(isset($_POST["textarea"])) {

    $message = new Message(date("d/m/Y"), date("H:i:s"), $_POST["textarea"]);
	$_SESSION["messages"][] = $message;
}

function ecrireMessageListe() {

	if(!isset($_SESSION["messages"])) {
		return;
	}
		
	$n = count($_SESSION["messages"]);
	
	echo '<table class="table table-striped table-bordered">';
    
	for($i = 0; $i < $n; ++$i) {
       
		echo '<tr><td>' . $_SESSION["messages"][$n - $i - 1] . '</td></tr>';
	}
	
	echo '</table>';
}

function connexionOK() : bool {
	
	if(!isset($_POST["login"])) {
		
		return false;
	}
	
	$pseudo = $_POST["pseudo"] ?? '';
	$mdp = $_POST["mdp"] ?? '';
	
	if($pseudo === PSEUDO && $mdp === MDP) {
		
		$_SESSION["log"] = true;
		return true;
	}
	else {
		
		if(strlen($pseudo) > 15 || strlen($mdp) > 4) {
			
			http_response_code(413); //Trop d'informations à traiter
		}
		else {
			
			http_response_code(400); //Mauvais mot de passe
		}
		return false;
	}
}

function deconnexion() : bool {

	if(isset($_POST["logout"])) {
		
		session_destroy();
		session_unset();
		return true;

	}
	else {
		
		return false;
	}
}
?>


<!doctype html>
<html>
	<head>
		<title>Session PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<?php if($log) { ?>
		
		<div class="container">
			<form method="POST">
				<textarea class="form-control" rows="3" spellcheck="false" name="textarea"></textarea><br>
				<input class="btn btn-success" style="float: right;" type="submit" value="Valider">
			</form>
			
			<form method="POST">
				<input class="btn btn-danger" style="float: right;" type="submit" value="Déconnexion" name="logout">
			</form>
			
			<?php ecrireMessageListe(); ?>
		</div>
		
		<?php } else { ?>
		
		<form method="POST">
			<input type="text" name="pseudo" placeholder="Pseudo">
			<input type="password" name="mdp" placeholder="Mot de passe">
			<input type="submit" name="login" value="Connexion">
			
			<?php
			switch(http_response_code()) {
					case 400: echo '<span>Erreur dans le pseudo ou le mot de passe.</span>'; break;
					case 413: echo '<span>Erreur: Trop d\'informations à traiter</span>'; break;
					case 418: echo '<span>Erreur: Je suis une théière</span>'; break;
			}
			?>
		</form>
		
		<?php } ?>
    </body>
</html>
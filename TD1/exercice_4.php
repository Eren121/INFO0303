<html>
<head>
	<meta charset=""UTF-8 lang=""fr">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercice 1</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script>
		function update(i) {
		
			$('table').hide();
			$('table:nth-of-type('+i+')').show();
		}
	</script>
<?php
for($i = 1; $i <= 10; ++$i) {

	echo "<h2><a href='javascript:update($i);'>Table de $i</a></h2>";
}

for($i = 1; $i <= 10; ++$i) {

	echo "<table class='table table-striped table-condensed' style='display: none;'>";
    echo "<tr><th>Calcul</th><th>Valeur</th></tr>";

	for($j = 1; $j <= 10; ++$j) {

		echo "<tr><td>$i * $j</td><td>" . $i * $j . "</td></tr>";
	}

	echo "</table>";
}
?>

</body>
</html>

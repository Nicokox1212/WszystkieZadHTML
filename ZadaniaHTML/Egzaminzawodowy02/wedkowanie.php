<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Klub wędkowania</title>
	<link rel="stylesheet" href="styl2.css" />
</head>
<body>
	<div id="baner">
		<h2>Wędkuj z nami!</h2>
	</div>
	<div id="lewy">
		<img src="ryba2.jpg" alt="Szczupak" />
	</div>
	<div id="prawy">
		<h3>Ryby spokojnego żeru (białe)</h3>

		<?php
		$db_connect = mysqli_connect("localhost", "root", "", "wedkowanie4bt");

		if (!$db_connect) {
			echo "<p>Błąd połączenia z bazą danych.</p>";
		} else {
			$query = mysqli_query($db_connect, "SELECT id, nazwa, wystepowanie FROM Ryby WHERE styl_zycia = 2;");

			while ($row = mysqli_fetch_assoc($query)) {
				echo $row['id'] . ". " . $row['nazwa'] . ", występuje w: " . $row['wystepowanie'] . "<br>";
			}

			mysqli_close($db_connect);
		}
		?>

		<ol>
			<li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
			<li><a href="https://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
		</ol>
	</div>
	<div id="stopka">
		<p>Stronę wykonał: 0000000</p>
	</div>
</body>
</html>

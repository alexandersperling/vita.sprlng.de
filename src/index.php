<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,200' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel='stylesheet'>
		<link rel="stylesheet" href="style.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="script.js"></script>
		<title>Vita</title>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>Lebenslauf</h1><hr class="line"><h1>Alexander Sperling - geb. Reinelt</h1>
				<img src="1.jpg" class="me_img" alt="me"/>
				<br /><br />
				alexander [at] reinelt [dot] de [dot] com - <a href="Alexander_Reinelt_pub.asc"><i>PGP</i></a><br />
				<a href="http://rnlt.de"> rnlt.de</a>
			</div>
			<br />
			<div id="content">
					<?php 
					include "exp.php"; 
					include "knowledge.php";
					?>
			</div>
			<div id="footer">
				<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Freinelt.de.com%2Fvita%2Findex.php"><img class="logo_valid_html" src="html5_valid.png" alt="HTML ist valide!" /></a>
				<a href="http://www.w3schools.com/html/default.asp"><img class="logo_html" src="html5.png" alt="html5" ></a>
				<a href="https://jigsaw.w3.org/css-validator/check/referer"><img class="logo_valid_css" src="https://jigsaw.w3.org/css-validator/images/vcss" alt="CSS ist valide!" /></a>
			</div>
		</div>
	</body>
</html>

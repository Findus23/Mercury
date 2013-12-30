<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="./design.css" type="text/css" />
<title>Sonnensystem-Eingabe</title>
</head>

<body>
<?php
include 'menu.html';
?>
<h1>Kepler 11-Eingabe</h1>
<ul>
	<li><a href="./Kepler11/big.in">big.in</a></li>
	<ul>
		<li>Bahndaten von Kepler11</li>
		<li>Daten von <a href="http://exoplanets.org/detail/Kepler-11">exoplanets.org</a>
	</ul>
		<li><a href="./Kepler11/element.in">element.in</a></li>
	<ul>
		<li>Orignaldatei von Mercury</li>
		<li>Zusätzlich x,y und z-Position</li>
	</ul>
	<li><a href="./Kepler11/param.in">param.in</a></li>
	<ul>
		<li>wird von <a href="./gui.sh.php">gui.sh</a> bearbeitet</li>
		<li>Anfang: 23. November 2000</li>
		<li>Ende: 24. November 2001</li>
		<li>Ausgabeintervall: 0.036 Tage = 52 Minuten</li>
		<li>Zeitschritt: 0.01 Tage</li>
	</ul>
	<li><a href="./Kepler11/small.in">small.in</a></li>
	<ul>
		<li>leer (da keine Asteroiden)</li>
	</ul>
</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="./design.css" type="text/css" />
<title>gui.sh</title>
</head>

<body>
<?php
include 'menu.html';
?>
<h2>Erklärung</h2>
	<p>Bashskript zur einfacheren Konfiguration von Mercury</p>
	<ul>
		<li>Umrechnung zum julianischen Datum</li>
		<li>Bearbeiten der param.in-Datei</li>
	</ul>
<h2>Code</h2>
<!-- convertiert mit http://tohtml.com-->
<pre style='color:#000000;background:#ffffff;'><html><body style='color:#000000; background:#ffffff; '><pre>
<span style='color:#696969; '>#!</span><span style='color:#007997; '>/bin/bash</span>
<span style='color:#800000; font-weight:bold; '>.</span><span style='color:#40015a; '>/aufrä</span>umen<span style='color:#800000; font-weight:bold; '>.</span>sh
zenity --entry --<span style='color:#797997; '>title</span><span style='color:#808030; '>=</span>Startjahr  --<span style='color:#797997; '>text</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>"Bitte Startdatum eingeben"</span> <span style='color:#e34adc; '>></span>temp<span style='color:#800000; font-weight:bold; '>.</span>tmp
<span style='color:#797997; '>start</span><span style='color:#808030; '>=</span>$<span style='color:#800080; '>(</span>cat temp<span style='color:#800000; font-weight:bold; '>.</span>tmp<span style='color:#800080; '>)</span>
zenity --entry --<span style='color:#797997; '>title</span><span style='color:#808030; '>=</span>Endjahr  --<span style='color:#797997; '>text</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>"Bitte Enddatum eingeben"</span> <span style='color:#e34adc; '>></span>temp<span style='color:#800000; font-weight:bold; '>.</span>tmp
<span style='color:#797997; '>genauigkeit</span><span style='color:#808030; '>=</span>$<span style='color:#800080; '>(</span>zenity --entry --<span style='color:#797997; '>title</span><span style='color:#808030; '>=</span>Genauigkeit --<span style='color:#797997; '>text</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>"</span><span style='color:#797997; '>0</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>1 Jahr  </span><span style='color:#797997; '>1</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>36 Tage  </span><span style='color:#797997; '>2</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>3.6 Tage  </span><span style='color:#797997; '>3</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>0.36 Tage"</span><span style='color:#800080; '>)</span>
<span style='color:#800000; font-weight:bold; '>case</span> <span style='color:#0000e6; '>"</span><span style='color:#797997; '>$genauigkeit</span><span style='color:#0000e6; '>"</span> <span style='color:#800000; font-weight:bold; '>in</span>
		<span style='color:#0000e6; '>"0"</span><span style='color:#e34adc; '>)</span> <span style='color:#797997; '>timestep</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>8</span>
			<span style='color:#e34adc; '>;;</span>		
		<span style='color:#0000e6; '>"1"</span><span style='color:#e34adc; '>)</span> <span style='color:#797997; '>timestep</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>8</span>
			<span style='color:#e34adc; '>;;</span>		
		<span style='color:#0000e6; '>"2"</span><span style='color:#e34adc; '>)</span> <span style='color:#797997; '>timestep</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span>
			<span style='color:#e34adc; '>;;</span>
		<span style='color:#0000e6; '>"3"</span><span style='color:#e34adc; '>)</span> <span style='color:#797997; '>timestep</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800000; font-weight:bold; '>.</span><span style='color:#008c00; '>1</span>
			<span style='color:#e34adc; '>;;</span>
		<span style='color:#0000e6; '>"4"</span><span style='color:#e34adc; '>)</span> <span style='color:#797997; '>timestep</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800000; font-weight:bold; '>.</span><span style='color:#008c00; '>01</span>
			<span style='color:#e34adc; '>;;</span>
		<span style='color:#0000e6; '>"5"</span><span style='color:#e34adc; '>)</span> <span style='color:#797997; '>timestep</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800000; font-weight:bold; '>.</span><span style='color:#008c00; '>001</span>
			<span style='color:#e34adc; '>;;</span>
		<span style='color:#808030; '>*</span><span style='color:#e34adc; '>)</span> zenity --error --<span style='color:#797997; '>title</span><span style='color:#808030; '>=</span>Fehler  --<span style='color:#797997; '>text</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>"Bitte Zahl zwischen 0 und 3 eingeben."</span> 
		<span style='color:#bb7977; font-weight:bold; '>exit</span>
			<span style='color:#e34adc; '>;;</span>
<span style='color:#800000; font-weight:bold; '>esac</span>
<span style='color:#797997; '>ende</span><span style='color:#808030; '>=</span>$<span style='color:#800080; '>(</span>cat temp<span style='color:#800000; font-weight:bold; '>.</span>tmp<span style='color:#800080; '>)</span>
<span style='color:#797997; '>startjul</span><span style='color:#808030; '>=</span>$<span style='color:#800080; '>(</span><span style='color:#bb7977; font-weight:bold; '>echo</span> <span style='color:#0000e6; '>"(</span><span style='color:#797997; '>$start</span><span style='color:#0000e6; '>+4713)*365.2425"</span><span style='color:#e34adc; '>|</span>bc<span style='color:#800080; '>)</span>
<span style='color:#696969; '>#startunix=$(date --date="$start" +%s)</span>
<span style='color:#696969; '>#startjul=$(($startunix/86400+2440587))</span>
<span style='color:#696969; '>#echo $startjul</span>
<span style='color:#696969; '>#endeunix=$(date --date="$ende" +%s)</span>
<span style='color:#696969; '>#endejul=$(($endeunix/86400+2440587))</span>
<span style='color:#696969; '>#echo $endejul</span>
<span style='color:#797997; '>endejul</span><span style='color:#808030; '>=</span>$<span style='color:#800080; '>(</span><span style='color:#bb7977; font-weight:bold; '>echo</span> <span style='color:#0000e6; '>"(</span><span style='color:#797997; '>$ende</span><span style='color:#0000e6; '>+4713)*365.2425"</span><span style='color:#e34adc; '>|</span>bc<span style='color:#800080; '>)</span>
<span style='color:#bb7977; font-weight:bold; '>sed</span> -i <span style='color:#44aadd; '>-e</span> 7c<span style='color:#0000e6; '>" start time (days)= </span><span style='color:#797997; '>$startjul</span><span style='color:#0000e6; '>"</span> param<span style='color:#800000; font-weight:bold; '>.</span><span style='color:#800000; font-weight:bold; '>in</span> 
<span style='color:#bb7977; font-weight:bold; '>sed</span> -i <span style='color:#44aadd; '>-e</span> 8c<span style='color:#0000e6; '>" start time (days)= </span><span style='color:#797997; '>$endejul</span><span style='color:#0000e6; '>"</span> param<span style='color:#800000; font-weight:bold; '>.</span><span style='color:#800000; font-weight:bold; '>in</span> 
<span style='color:#bb7977; font-weight:bold; '>sed</span> -i <span style='color:#44aadd; '>-e</span> 9c<span style='color:#0000e6; '>" output interval (days) = 365.24d-</span><span style='color:#797997; '>$genauigkeit</span><span style='color:#0000e6; '>"</span> param<span style='color:#800000; font-weight:bold; '>.</span><span style='color:#800000; font-weight:bold; '>in</span> 
<span style='color:#bb7977; font-weight:bold; '>sed</span> -i <span style='color:#44aadd; '>-e</span> 10c<span style='color:#0000e6; '>" timestep (days) = </span><span style='color:#797997; '>$timestep</span><span style='color:#0000e6; '>"</span> param<span style='color:#800000; font-weight:bold; '>.</span><span style='color:#800000; font-weight:bold; '>in</span> 
 
rm temp<span style='color:#800000; font-weight:bold; '>.</span>tmp
<span style='color:#800000; font-weight:bold; '>.</span><span style='color:#40015a; '>/mercury.out</span>
<span style='color:#800000; font-weight:bold; '>.</span><span style='color:#40015a; '>/element.out</span>
sleep <span style='color:#008c00; '>0</span><span style='color:#800000; font-weight:bold; '>.</span><span style='color:#008c00; '>5</span>
gnuplot Einstellungen<span style='color:#800000; font-weight:bold; '>.</span>gp
</pre>
</body>
</html>
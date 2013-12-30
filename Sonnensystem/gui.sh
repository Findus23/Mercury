#!/bin/bash
./aufräumen.sh
zenity --entry --title=Startjahr  --text="Bitte Startjahr eingeben" >temp.tmp
start=$(cat temp.tmp)
zenity --entry --title=Endjahr  --text="Bitte Endjahr eingeben" >temp.tmp
genauigkeit=$(zenity --entry --title=Genauigkeit --text="0=1 Jahr  1=36 Tage  2=3.6 Tage  3=0.36 Tage")
case "$genauigkeit" in
		"0") timestep=8
			;;		
		"1") timestep=8
			;;		
		"2") timestep=1
			;;
		"3") timestep=0.1
			;;
		"4") timestep=0.01
			;;
		"5") timestep=0.001
			;;
		*) zenity --error --title=Fehler  --text="Bitte Zahl zwischen 0 und 3 eingeben." 
		exit
			;;
esac
ende=$(cat temp.tmp)
startjul=$(echo "($start+4713)*365.2425"|bc)
endejul=$(echo "($ende+4713)*365.2425"|bc)
sed -i -e 7c" start time (days)= $startjul" param.in 
sed -i -e 8c" start time (days)= $endejul" param.in 
sed -i -e 9c" output interval (days) = 365.24d-$genauigkeit" param.in 
sed -i -e 10c" timestep (days) = $timestep" param.in 
 
rm temp.tmp
./mercury.out
./element.out
sleep 0.5
gnuplot Einstellungen.gp


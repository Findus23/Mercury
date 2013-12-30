# set nokey #keine Legende
set grid #Gitter anzeigen
# set title "LOAD-Wert" #eventuell Überschrift
#set ylabel 'Grad'
#set xlabel 'Jahre'
#set y2tics # Zahlen auch auf 2. y-Achse
set size ratio 1 #ratio -1 für richtiges Seitenverhältnis
set style data dots
plot "EARTHMOO.aei" using 11:12 title 'Erde',\
"MERCURY.aei" using 11:12 title 'Merkur',\
"VENUS.aei" using 11:12 title 'Venus',\
"MARS.aei" using 11:12 title 'Mars',\
"APOPHIS.aei" using 11:12 title 'Apophis',\
"APOLLO.aei" using 11:12 title 'Apollo'
set terminal png size 600,600
set output "oben.png"
replot

plot "EARTHMOO.aei" using 11:13 title 'Erde',\
"MERCURY.aei" using 11:13 title 'Merkur',\
"VENUS.aei" using 11:13 title 'Venus',\
"MARS.aei" using 11:13 title 'Mars',\
"APOPHIS.aei" using 11:13 title 'Apophis',\
"APOLLO.aei" using 11:13 title 'Apollo'
set terminal png size 600,600
set output "seite1.png"
replot

plot "EARTHMOO.aei" using 12:13 title 'Erde',\
"MERCURY.aei" using 12:13 title 'Merkur',\
"VENUS.aei" using 12:13 title 'Venus',\
"MARS.aei" using 12:13 title 'Mars',\
"APOPHIS.aei" using 12:13 title 'Apophis',\
"APOLLO.aei" using 12:13 title 'Apollo'
set terminal png size 600,600
set output "seite2.png"
replot

plot "EARTHMOO.aei" using 11:12 title 'Erde',\
"MERCURY.aei" using 11:12 title 'Merkur',\
"VENUS.aei" using 11:12 title 'Venus',\
"MARS.aei" using 11:12 title 'Mars',\
"APOPHIS.aei" using 11:12 title 'Apophis',\
"APOLLO.aei" using 11:12 title 'Apollo',\
"JUPITER.aei" using 11:12 title 'Jupiter',\
"SATURN.aei" using 11:12 title 'Saturn',\
"URANUS.aei" using 11:12 title 'Uranus',\
"NEPTUNE.aei" using 11:12 title 'Neptun'
set terminal png size 600,600
set output "gesamt.png"
replot

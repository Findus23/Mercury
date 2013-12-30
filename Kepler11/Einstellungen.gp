# set nokey #keine Legende
set grid #Gitter anzeigen
# set title "LOAD-Wert" #eventuell Überschrift
#set ylabel 'Grad'
#set xlabel 'Jahre'
#set y2tics # Zahlen auch auf 2. y-Achse
set size ratio 1
set style data dots
set label "Kepler 11" at 0,0 point pointtype 7

plot "KEP11b.aei" using 11:13  title 'b',\
"KEP11c.aei" using 11:13  title 'c',\
"KEP11d.aei" using 11:13  title 'd',\
"KEP11e.aei" using 11:13  title 'e',\
"KEP11f.aei" using 11:13  title 'f',\
"KEP11g.aei" using 11:13  title 'g'
set terminal png size 600,600
set output "oben.png"
replot

plot "KEP11b.aei" using 11:12  title 'b',\
"KEP11c.aei" using 11:12  title 'c',\
"KEP11d.aei" using 11:12  title 'd',\
"KEP11e.aei" using 11:12  title 'e',\
"KEP11f.aei" using 11:12  title 'f',\
"KEP11g.aei" using 11:12  title 'g'
set terminal png size 1024,600
set output "seite1.png"
replot

plot "KEP11b.aei" using 13:12  title 'b',\
"KEP11c.aei" using 13:12  title 'c',\
"KEP11d.aei" using 13:12  title 'd',\
"KEP11e.aei" using 13:12  title 'e',\
"KEP11f.aei" using 13:12  title 'f',\
"KEP11g.aei" using 13:12  title 'g'
set terminal png size 1024,600
set output "seite2.png"
replot
# set nokey #keine Legende
set grid #Gitter anzeigen
# set title "LOAD-Wert" #eventuell Überschrift
set ylabel 'Grad'
set xlabel 'Jahre'
#set y2tics # Zahlen auch auf 2. y-Achse
set size ratio 1
set xrange [-2:2]
set yrange [-2:2]
set terminal gif animate size 600,600
set output "Animation.png"
#do for [ii=1050:1300] {
do for [ii=1050:1300] {
  plot 'EARTHMOO.aei' every ::1050::ii using 11:12 with lines title "Erde",\
	 'EARTHMOO.aei' every ::ii::ii using 11:12 ps 3 title "Erde bei ".ii,\
         'APOPHIS.aei' every ::1050::ii using 11:12 with lines title "Apophis",\
	 'APOPHIS.aei' every ::ii::ii using 11:12 ps 3 title "Apophis bei ".ii

print ii
}
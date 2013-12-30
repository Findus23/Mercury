set style data dots
set xrange [-2.5:2.5]
set yrange [-2.5:2.5]
set zrange [-2.5:2.5]
set label "Sonne" at 0,0,0 point pointtype 7 
set view 45,0 
splot "EARTHMOO.aei" using 11:12:13 title 'Erde',\
"MERCURY.aei" using 11:12:13 title 'Merkur',\
"VENUS.aei" using 11:12:13 title 'Venus',\
"MARS.aei" using 11:12:13 title 'Mars',\
"APOPHIS.aei" using 11:12:13 title 'Apophis',\
"APOLLO.aei" using 11:12:13 title 'Apollo'
set terminal png size 1024,600
set output "1.png"
replot
set view 45,22.5 
set output "2.png"
replot
set view 45,45
set output "3.png"
replot
set view 45,67.5 
set output "4.png"
replot
set view 45,90 
set output "5.png"
replot
set view 45,112.5
set output "6.png"
replot
set view 45,135
set output "7.png"
replot
set view 45,157.5
set output "8.png"
replot
set view 45,180
set output "9.png"
replot
set view 45,202.5
set output "10.png"
replot
set view 45,225
set output "11.png"
replot
set view 45,247.5
set output "12.png"
replot
set view 45,270
set output "13.png"
replot
set view 45,292.5
set output "14.png"
replot
set view 45,315
set output "15.png"
replot
set view 45,337.5
set output "16.png"
replot
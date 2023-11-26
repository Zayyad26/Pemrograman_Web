<?php
//Volume Prisma Segitiga
$a = 6;
$t = 4;
$t_prisma = 12;
$volume = (1/2*$a*$t)*$t_prisma;

//Luas Prisma Segitiga
$l_alas = 12;
$k_alas = 3;
$tinggi_prisma = 5;
$luas = 2*$l_alas + $k_alas*$tinggi_prisma;

print "<h4>Menghitung Volume dan luas Prisma Segitiga<h4>";
print "Alas :".$a;
print "<br/>";
print "Tinggi :".$t;
print "<br/>";
print "Tinggi Prisma :".$t_prisma;
print "<br/>";
print "Volume Prisma Segitiga adalah = ".$volume;
print "<br/>";
print "<br/>";
print "<br/>";
print "Luas Alas :".$l_alas;
print "<br/>";
print "Keliling alas :".$k_alas;
print "<br/>";
print "Tinggi Prisma :".$tinggi_prisma;
print "<br/>";
print "Luas Prisma Segitiga adalah = ".$luas;
?>

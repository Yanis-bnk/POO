<?php
/*require 'src/personne.php';
$goku = new personne("goku","1000","200");
$vegeta = new personne("vegita","1000","100");
$goku->Coup();
$vegeta->Coup( );
echo $goku->__toString();
echo"<br>";
echo $vegeta->__toString();
*/
require 'src/cercle.php';
$cercle1= new cercle("10","3,14");
$cercle2= new cercle("20","3,14");
$cercle3= new cercle("30","3,14");
echo $cercle1->surface();
echo "<br>"; 
echo $cercle2->surface();
echo "<br>"; 
echo $cercle3->surface();


<?php
require 'src/personne.php';
$goku = new personne("goku","1000","200");
$vegeta = new personne("vegita","1000","100");
$goku->Coup();
$vegeta->Coup( );
echo $goku->__toString();
echo"<br>";
echo $vegeta->__toString();

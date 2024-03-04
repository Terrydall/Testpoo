<?php
require_once 'AutoLoader.php';



$elfe = new Elfe("Legolas");
$elfe->necromancien();
$elfe->Arc();
$elfe->Vélo();
var_dump($elfe);


$humain = new Humain("Draguos");
$humain->guerrier();
$humain->Hache();
$humain->APied();
var_dump($humain);



$nain = new Nain("Pourfender");
$nain->ranger();
$nain->Epée();
$nain->SoucoupeViolante();
var_dump($nain);


$orc = new Orc("Dyane");
$orc->paladin();
$orc->Bâton();
$orc->Cheval();
var_dump($orc);

$tauren = new Tauren("Terrydall");
$tauren->voleur();
$tauren->Dague();
$tauren->Moto();
var_dump($tauren);

//$humain->attaquer($orc,$marave);
//var_dump($orc,$humain);

$Orc->attaquer($Nain);
$Nain->attaquer($Orc);

$Orc->defendre($Nain);
$Nain->defendre($Orc);








